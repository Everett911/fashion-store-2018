# Fashion Store (2018 student project)

A clothing store website layout I built in January 2018 while studying for my
Advanced Diploma in Information Technology at Informatics in Baguio City. It
was one of my first websites.

> **Archived as-is.** I'm keeping this repository as a record of where I
> started, not as an example of how I write code today. For my current work,
> see my [portfolio](https://everett-lara.vercel.app/) and
> [Digi-Express](https://github.com/Everett911/digi-express), a full-stack store
> I built in 2026.

## What's in it

Five pages sharing one stylesheet:

| Page | Contents |
| --- | --- |
| `index.php` | Home page with a quick-search box and featured items |
| `Men.php` | Men's clothing catalogue |
| `Women.php` | Women's clothing catalogue |
| `About.php` | About the store |
| `SignUp.php` | Sign-up form |

Every page also has a login bar at the top.

The pages use the `.php` extension but contain no PHP yet. I built the layout
and forms first, and the server-side login and sign-up were never added. Some
attributes (`ID`, `Visible`, `TextMode`) come from ASP.NET Web Forms, which we
were also learning at the time.

## What I learned

- Page structure with HTML and styling with a shared CSS file
- Building navigation that stays the same across several pages
- Laying out product grids and forms

## Looking back

If I built it again today, I would use semantic HTML instead of tables for
layout, use real form validation and `type="password"` fields, give every
image `alt` text, and handle sign-up and login on a server with hashed
passwords.

## Running it

Open `index.php` in a browser, or serve the folder with any web server, for
example `php -S localhost:8000`.
