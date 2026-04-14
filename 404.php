<?php http_response_code(404); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" type="image/svg+xml" href="/favicon2.svg">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada — Maison Wan</title>
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            text-align: center;
            padding: 60px 20px;
        }

        .error-code {
            font-size: 120px;
            font-weight: normal;
            margin: 0;
            letter-spacing: 12px;
            color: #1D1D1D;
            line-height: 1;
        }

        .error-divider {
            width: 60px;
            height: 1px;
            background-color: #1D1D1D;
            margin: 32px auto;
        }

        .error-title {
            font-size: 14px;
            letter-spacing: 4px;
            font-weight: normal;
            margin-bottom: 16px;
            color: #1D1D1D;
        }

        .error-description {
            font-size: 13px;
            color: #666;
            margin-bottom: 40px;
            font-family: 'Helvetica', sans-serif;
            font-weight: 300;
            line-height: 1.8;
        }

        .error-button {
            display: inline-block;
            padding: 14px 40px;
            background: transparent;
            color: #1D1D1D;
            text-decoration: none;
            border: 1px solid #1D1D1D;
            font-size: 11px;
            letter-spacing: 3px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .error-button:hover {
            background-color: #1D1D1D;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="top-bar"></div>
    <header>
        <div class="header-top">
            <div class="header-icons-left">
                <button class="hamburger">
                    <i class="ph ph-list"></i>
                </button>
                <i class="ph ph-magnifying-glass"></i>
            </div>
            <h1><a href="/">Maison Wan</a></h1>
            <div class="header-icons">
                <i class="ph ph-magnifying-glass"></i>
                <i class="ph ph-user"></i>
                <i class="ph ph-heart"></i>
                <i class="ph ph-shopping-bag"></i>
            </div>
        </div>
<?php include_once 'menu.php' ?>
    </header>

    <main>
        <div class="error-container">
            <p class="error-code">404</p>
            <div class="error-divider"></div>
            <h2 class="error-title">PAGE NOT FOUND</h2>
            <p class="error-description">
                A página que você procura não existe ou foi movida.<br>
                Verifique o endereço ou retorne à página inicial.
            </p>
            <a href="/" class="error-button">RETORNAR À HOME</a>
        </div>
    </main>

    <footer>
        <div class="footer-logo">Maison Wan</div>
        <div class="footer-grid">
            <div class="footer-col">
                <h4 class="margin10">EXPLORE</h4>
                <ul>
                    <li><a href="#">Haute Couture</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">High Jewelry</a></li>
                    <li><a href="#">Fine Jewelry</a></li>
                    <li><a href="#">Watches</a></li>
                    <li><a href="#">N°5</a></li>
                    <li><a href="#">Eyewear</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Woman</a></li>
                    <li><a href="#">SiteMap</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="margin10">ONLINE SERVICES</h4>
                <ul>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Shipping Options</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Care & Services</a></li>
                    <li><a href="#">E-gift card</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="margin10">BOUTIQUE SERVICES</h4>
                <ul>
                    <li><a href="#">Store Locator</a></li>
                    <li><a href="#">Book an Appointment</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="margin10">THE HOUSE OF WAN</h4>
                <ul>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Do Not Sell or Share My Personal Information</a></li>
                    <li><a href="#">Report to Society</a></li>
                    <li><a href="#">Fighting Counterfeits</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">California Transparency in Supply Chains</a></li>
                    <li><a href="#">WAN Racial Justice Efforts</a></li>
                    <li><a href="#">Transparency in Coverage</a></li>
                    <li><a href="#">Sustainability-Linked Bond Update</a></li>
                    <li><a href="#">Responsible Jewellery Statement</a></li>
                    <li><a href="#">Consumer Health Data Privacy Notice</a></li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            <span>© 2026 Maison Wan</span>
            <div class="footer-social">
        <a href="https://www.instagram.com/maisonwan/"><i class="ph ph-instagram-logo"></i></a>
        <a href="https://www.facebook.com/maisonwan"><i class="ph ph-facebook-logo"></i></a>
        <a href="https://www.youtube.com/maisonwan"><i class="ph ph-youtube-logo"></i></a>
        <a href="https://www.tiktok.com/@maisonwan"><i class="ph ph-tiktok-logo"></i></a>
            </div>
        </div>
    </footer>

    <script src="/js/script.js"></script>
</body>
</html>
