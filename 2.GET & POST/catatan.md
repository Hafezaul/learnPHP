# Catatan `GET` and `POST` PHP 

### Pengertian `GET` 

Metode `GET` adalah metode yang datanya dikirim melalui URL, data yang dikirim di URL berupa rangkaian pasangan nama dan nilai yang dipisahkan oleh ampersand (&). URL dengan data `GET` akan terlihat sebagai berikut:

```
localhost/3000/index.php?name=faris&age=17
```

untuk melihat url, liat di bagian search box pada browser. 

Digunakan untuk:

- pencarian
- filter
- navigasi

Tidak untuk data sensitif

### Contoh 

Buat file 
```
form.html
get.php
```

```form.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    

</head>
<body>
 

<form class="max-w-sm mx-auto" action="../a.GET/get.php" method="GET">
  <div class="mb-5">
    <label for="email-alternative" class="block mb-2.5 text-sm font-medium text-heading">Your email</label>
    <input type="email" id="email-alternative" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body" placeholder="name@flowbite.com" name="email" />
  </div>
  <div class="mb-5">
    <label for="password-alternative" class="block mb-2.5 text-sm font-medium text-heading">Your password</label>
    <input type="password" id="password-alternative" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body" placeholder="••••••••"  name="password" />
  </div>
  <div class="flex items-start mb-5">
    <label for="remember-alternative" class="flex items-center h-5">
      <input id="remember-alternative" type="checkbox" value="" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft" required />
      <p class="ms-2 text-sm font-medium text-heading select-none">I agree with the <a href="#" class="text-fg-brand hover:underline">terms and conditions</a>.</p>
    </label>
  </div>

<button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Kirim</button>

</form>




    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>
```

```get.php
<?php 
echo "Hello, " . $_GET['email'] . "! Your password is : " . $_GET['password'] . " .";

?> 
```
---

### Pengertian `POST`

Method `POST` adalah metode pengiriman data yang Datanya tidak disimpan pada URL. Data pada method `POST` ini tetap dikirimkan akan tetapi tidak ditampilan pada URL seperti `GET`. Method `POST` ini biasanya digunakan saat registrasi yang membutuhkan input email dan password yang seharusnya tidak muncul di URL.

#### Contoh 

Buat file 
```
form.html
post.php
```

```form.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    

</head>
<body>
 

<form class="max-w-sm mx-auto" action="../b.POST/post.php" method="POST">
  <div class="mb-5">
    <label for="email-alternative" class="block mb-2.5 text-sm font-medium text-heading">Your email</label>
    <input type="email" id="email-alternative" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body" placeholder="name@flowbite.com" name="email" />
  </div>
  <div class="mb-5">
    <label for="password-alternative" class="block mb-2.5 text-sm font-medium text-heading">Your password</label>
    <input type="password" id="password-alternative" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow placeholder:text-body" placeholder="••••••••"  name="password" />
  </div>
  <div class="flex items-start mb-5">
    <label for="remember-alternative" class="flex items-center h-5">
      <input id="remember-alternative" type="checkbox" value="" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft" required />
      <p class="ms-2 text-sm font-medium text-heading select-none">I agree with the <a href="#" class="text-fg-brand hover:underline">terms and conditions</a>.</p>
    </label>
  </div>

<button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Kirim</button>

</form>




    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>
```

```post.php
<?php
// 

$nama = $_POST['email'];
$password = $_POST['password']; 

echo "Hello, " . $nama . "! Your password is : " . $password . " .";
?>
```
