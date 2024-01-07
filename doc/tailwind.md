# TailwindCSSの設定

TailwindとDaisyUIを入れます。

## インストール

```shell
pnpm add -D tailwindcss daisyui@latest postcss autoprefixer && pnpx tailwindcss init -p
```

## tailwind.config.jsの設定

```js
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/**/*.blade.php",
        "./resources/**/**/*.js",
        "./app/View/Components/**/**/*.php",
        "./app/Livewire/**/**/*.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
};
```

## app.cssの設定

resources/css/app.css

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

## app.blade.phpの設定

`resources/views/components/layouts/app.blade.php`がない場合は下記で作成します。

```shell
php artisan livewire:layout
```

app.blade.phpに下記のように、`@vite()` を追加します。

```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{ $slot }}
</body>

</html>
```

## サーバ起動

```shell
pnpm dev
```
