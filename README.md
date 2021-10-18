<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## What I learnt

-   Vue js api
-   Laravel
-   <a href="https://voyager-docs.devdojo.com">voyager</a>
-   <a href="https://stripe.com/docs/js">Stripe js</a>
-   testing with PHP unit
-   Paypale che ckout
-   Transaction Email
-   <a href="https://packagist.org/packages/hardevine/shoppingcart">Laravel shopping cart</a>

## Core Feature

- Payment checkout
- Single page dynamic shopping cart (with saves for later feature) UX using vue js api
- single page products search
- product details with image gallery
- automatic calculated bills
- discount with coupon code
- admin backend with laravel voyager
- admin management (order, products, blog, categories, user etc...)
- product category and arrange with price (low to high or high to low)
- dynamic product images gallery
- allow guest checkout
- authentication
- feature product
- best selling products
- give rating stars to product
- (In stock, Low stock, Out of stock) badge
- Cannot buy more than available quantity
- blog (posts with categories)
- User Profile
- User Orders details Page

## Screenshot

- Home Page
    ![Home Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/home-page.png "Home Page")

- Shop Page
    ![Shop Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/shop-page.png "Shop Page")

- Product Details Page
    ![Shop Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/product-details.png "Product Details Page")

- Shopping Cart Page
    ![Shopping Cart Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/cart.png "Product Details Page")

- Checkout Page
    ![Checkout Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/checkout-1.png "Checkout Page")

    ![Checkout Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/checkout-2.png "Checkout Page")

- Blog Page
    ![Blog Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/blog-page.png "Blog Page")

- My Profile Page
    ![Blog Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/my-profile.png "Blog Page")

- My Orders Page
  ![Blog Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/my-order.png "Blog Page")

- My Orders Details Page
  ![Blog Page](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/order-details.png "Blog Page")


- Voyager Admin Panel
    ![Voyager Admin Panel manager assessment](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/voyager-manager-assessment.png "manager assessment")

    ![Voyager Admin Panel admin assessment](https://raw.githubusercontent.com/Hein-Z/shop_blog/main/voyager-admin-assessment.png "admin assessment")


## Installation

1 . Clone the repo and cd into it

2 . Rename or copy .env.example file to .env

3 .
```bash
composer install
```
```bash
php artisan key:generate
```
4 . Set your database credentials in your .env file.

5 . 
```bash
php artisan migrate --seed
```

6 . Set your Stripe credentials in your .env file. Specifically STRIPE_KEY and STRIPE_SECRET .
Getting from https://dashboard.stripe.com/test/apikeys after login

7 . Set your APP_URL in your .env file. This is needed for Voyager to correctly resolve asset URLs.

8 . 
```bash
php artisan storage:link
```
9 . 
```bash
npm install
```
```bash
npm run dev
```
php artisan serve or use Laravel Valet or Laravel Homestead

Visit localhost:8000 in your browser

Visit /admin if you want to access the Voyager admin backend. 



## manager account

-   manager@gmail.com
-   password

## admin account

-   admin@gmail.com
-   password
