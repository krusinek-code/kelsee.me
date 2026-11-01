# Deploy & branching

## The flow

```
feature/whatever ──▶ develop ──▶ main
                        │          │
                   auto-deploys  auto-deploys
                    to staging   to kelsee.me
```

- **main** is production. A push (or merged PR) deploys to kelsee.me.
- **develop** is staging. Pushes deploy to the staging subdomain.
- **feature/*** branches hold work in progress. Branch from `develop`,
  PR back into `develop`, look at staging, then PR `develop → main`.

For quick fixes, `main` directly is fine — it's a personal site, not a
bank. The flow is there for when the change deserves a preview.

## One-time setup

### 1. Dedicated deploy key (not your personal key)

```bash
ssh-keygen -t ed25519 -f ~/.ssh/dreamhost_deploy -C "github-actions kelsee.me" -N ""
```

Add the **public** half to the server:

```bash
ssh-copy-id -i ~/.ssh/dreamhost_deploy.pub YOUR_USER@YOUR_HOST.dreamhost.com
```

(or paste `dreamhost_deploy.pub` into `~/.ssh/authorized_keys` on the
server, or via the DreamHost panel under Manage Users.)

### 2. Staging subdomain

In the DreamHost panel: add `staging.kelsee.me` as a fully hosted
subdomain. Note its web directory (usually `~/staging.kelsee.me`).
Optional but recommended: password-protect it (panel → Htaccess/WebDAV)
so drafts stay drafts.

### 3. GitHub secrets — the secure storage

Repo → Settings → Environments → create `production` and `staging`.
In each, add:

| Secret | Value |
|---|---|
| `DREAMHOST_SSH_KEY` | contents of `~/.ssh/dreamhost_deploy` (the **private** key) |
| `DREAMHOST_HOST` | e.g. `iad1-shared-xyz.dreamhost.com` or `kelsee.me` |
| `DREAMHOST_USER` | your DreamHost shell user |
| `DREAMHOST_PATH` | `~/kelsee.me/` (production env only) |
| `DREAMHOST_STAGING_PATH` | `~/staging.kelsee.me/` (staging env only) |

GitHub encrypts these at rest (libsodium sealed boxes), masks them in
logs, and never exposes them to PRs from forks. Environment-scoping
means the staging job literally cannot see production's path.

Then: Settings → Branches → protect `main` (require PR, no force-push).

### 4. Delete the local private key? No — but guard it

Keep `~/.ssh/dreamhost_deploy` local as backup, never commit it.
`.gitignore` already refuses `*.key` and `.env`; `.deployignore` keeps
rsync's `--delete` from touching server-only files like `config.php`.

## Rules that keep this safe

1. **Secrets never enter the repo.** Not in code, not in history, not
   "temporarily." API keys (Resend, etc.) live in `config.php` on the
   server or in GitHub Secrets — both excluded from sync.
2. **`--delete` is in effect.** The server mirrors the repo. Anything
   server-only must be listed in `.deployignore` or it will be removed
   on the next deploy. Check that list before adding server-side files.
3. **The deploy key does one job.** If it ever leaks, revoke it in
   `authorized_keys` and rotate — your personal key is never exposed.

## Deploying

```bash
git checkout develop && git merge feature/thing && git push   # → staging
# looks good?
git checkout main && git merge develop && git push            # → live
```

Or via PRs, which is the better habit and the better public record.
`workflow_dispatch` is enabled too — you can re-run a deploy from the
Actions tab without pushing.
