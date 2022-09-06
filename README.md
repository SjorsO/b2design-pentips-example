#### Setup
```
cp .env.example .env

composer install

npm i
```

#### Uitleg
Draai tijdens het ontwikkelen:
```
npm run dev
```

Verder zit volgens mij alles wat je nodig hebt in deze bestanden:

- `routes/web.php` bevat de routes
- `resources/views/` bevat alle blade views
- `resources/views/components` bevat alle Blade components
  - Blade components werken met een naming convention. Bijvoorbeeld, een button component `/resources/views/components/button.blade.php` kan je gebruiken in Blade met `<x-button/>`. Components in subfolders werken als volgt: `<x-layout.templates.guest/>`.

Verder heb je nog `resources/app.pcss` waar je de "normale" css kwijt zou kunnen.

Javascript kan je kwijt in `resources/js/app.js`. Of installeer AlpineJS en gooi alle javascript in de HTML.

Verder qua denkwijze: maak van elementen die herbruikt worden componenten. Maak van unieke elementen geen componenten.
Stel, de homepagina heeft een unieke hero, stop die dan gewoon in `home.blade.php`. Het heeft meestal weinig meerwaarde om een component te maken die je vervolgens maar één keer gebruikt.

Qua naming conventions: alles in de `resources/views` folder is kebab-case.
