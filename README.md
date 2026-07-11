# kelsee.me

My resume site — and a small, public record of how it got made.

**Live:** [kelsee.me](https://kelsee.me)

## Why this repo is public

I work as a synthesist: the connective tissue between human intent and
machine capability. It's easy to *say* that. This repo shows it.

The site was built in collaboration with AI (Claude), and the git history
is the actual iteration arc — not a squashed final commit, but the real
shape of the work:

| Commit | Stage |
|---|---|
| `The clay` | One 382KB HTML file. Inline CSS, base64 images. It worked. It shipped momentum, not perfection. |
| `Structure` | CSS externalized, images extracted to real files. Same pixels, honest architecture. HTML: 382KB → 7KB. |
| `Content, accessibility, and a time capsule` | Schema, print styles, a11y pass, the full work timeline — and the original 2002 site I built, resurrected as an easter egg. |
| `Polish` | Standardizing the small language: footnote links get their own visual species. |

Read the commits oldest-first. That's the point.

## How I work with AI

Neither of us hand-wrote all of this. Neither of us finished it alone.

I direct; the AI drafts and executes; I review, redirect, and take the
wheel when judgment matters more than throughput. Every change in this
history was specified by me, produced in collaboration, and reviewed
before it landed. The AI also caught things I didn't ask about — an FTP
log with local paths in it, a personal email address in 24 files, my own
`aria-hidden` hiding my own headshot from screen readers. That's what the
leverage actually looks like: not autocomplete, a second set of eyes with
infinite patience.

## The time capsule

`/oemlogistics` is the actual OEM Logistics Support, Inc. site I built
in 2002 — FrontPage 4.0, `windows-1252`, table layout, Java hover
applets — preserved byte-for-byte as it shipped, except:

- personal email addresses dead-linked (26 of them)
- last names reduced to first names
- one `WS_FTP.LOG` (258KB of upload history and local Windows paths)
  removed, because 2002 me uploaded the FTP log to the public server
  and nobody noticed for 24 years

It's linked from the resume timeline via a footnote. Where the 20+
years starts counting.

## Structure

```
index.html          the resume
css/styles.css      all styling, including print
assets/             images, short names, no base64
oemlogistics/       2002, untouched on purpose
```

## Rights

Code: use what's useful. Content, images, portrait, and client logos:
all rights reserved / property of their respective owners — please
don't republish those.
