-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2023 at 05:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farcommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Top', 'top', 'category-photos/bnRSjjKZlGy6uZf7SilgWIM8lmXknEKDwR4l7SsT.jpg', '2023-10-02 18:16:20', '2023-10-02 18:16:20'),
(2, 'Skirt', 'skirt', 'category-photos/NIdmd9mZwxJNPBS9kOz4FjkdNmJkk0yKpgwB3VPH.jpg', '2023-10-02 18:17:42', '2023-10-02 18:17:42'),
(3, 'Outer', 'outer', 'category-photos/CfPCuNY1DvRanHFTp7DYbEUj7Q1yqglXDsAUB5uu.jpg', '2023-10-02 18:18:55', '2023-10-02 18:18:55'),
(4, 'Pants', 'pants', 'category-photos/1AvdLrDLDMSEAy0PmQrR5YOvl7XFsPyVBXyhFnk0.jpg', '2023-10-02 18:22:55', '2023-10-02 18:24:27'),
(5, 'Accessories', 'accessories', 'category-photos/C3WG6xofflQuyPexHzDeOmht5KTKJKcWPl2LOyvh.jpg', '2023-10-02 18:27:51', '2023-10-02 18:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_30_064207_create_products_table', 1),
(6, '2023_09_30_064220_create_categories_table', 1),
(7, '2023_10_02_033515_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publish_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `user_id`, `price`, `description`, `photo`, `created_at`, `updated_at`, `publish_at`) VALUES
(1, 'SHEIN Puff Sleeve Keyhole Back Top', 'shein-puff-sleeve-keyhole-back-top', 1, 1, '170', 'Free Returns ✓ Free Shipping On Orders $49+ ✓. SHEIN Puff Sleeve Keyhole Back Top- Women Blouses at SHEIN', 'product-photos/iXpGzD5tkmLxHNTUnFdfeE1JoCaP24epX5G3HV6r.jpg', '2023-10-02 18:34:05', '2023-10-02 18:34:05', NULL),
(2, 'Boho Chic Tops, Buy Beachy Boho Tops', 'boho-chic-tops-buy-beachy-boho-tops', 1, 1, '167', 'Shop cute boho tops ladies and boho flowy tops, shirts & blouses , kimonos, sweaters, and more in the latest style', 'product-photos/YQylVGqPd95VbMUlobiiZaNNIso9xxhzfrJt4yBJ.jpg', '2023-10-02 18:40:55', '2023-10-02 18:43:26', NULL),
(3, 'Korean Style Elegant Sweet Puff Sleeve Tops Female', 'korean-style-elegant-sweet-puff-sleeve-tops-female', 1, 1, '168', 'SPECIFICATIONSStyle: vintageSleeve Style: Puff SleeveSleeve Length(cm): ShortPattern Type: PrintModel Number: 5391Material', 'product-photos/umfrcxPdeH1ek7qOospaqACElpzoKDLNuQRpaymg.jpg', '2023-10-02 18:45:50', '2023-10-02 18:45:50', NULL),
(4, '37 Things That\'ll Have Everyone Asking', '37-things-that-ll-have-everyone-asking', 1, 1, '165', 'Flowy dresses, lightweight sweaters, adorable sandals, and everything else you need to look damn good this spring.', 'product-photos/97Yyp0ilaTogbnXqjZg5ijC1x22VGMEZqjvjGff2.jpg', '2023-10-02 18:51:14', '2023-10-02 18:51:47', NULL),
(5, 'VISCOSE BOXY SLEEVELESS TOP', 'viscose-boxy-sleeveless-top', 1, 1, '168', 'Mint Green Casual Polyester Plain Tank Embellished Slight Stretch Summer Women Tops, Blouses & Tee', 'product-photos/3EnLlBYoo8zm5xoVXbmV7BtwvdJv2BNJyQCuHm6N.jpg', '2023-10-02 18:53:46', '2023-10-02 18:53:46', NULL),
(6, 'Mandarin Collar Puff Sleeve Super Crop Top', 'mandarin-collar-puff-sleeve-super-crop-top', 1, 1, '167', 'White Sexy Collar Long Sleeve Fabric Plain Embellished Non-Stretch Women Clothing', 'product-photos/0d9bMpGp1wdBThOMPZhGYupgkLxfnLm9qhoDoPBs.jpg', '2023-10-02 18:56:52', '2023-10-02 18:57:10', NULL),
(7, 'Women\'s Black Balloon Sleeves Satin Crop Top', 'women-s-black-balloon-sleeves-satin-crop-top', 1, 1, '167', 'Ballon sleeves with elasticized cuffs- V neck- Cropped hem- Half smocked waist back- Front button', 'product-photos/P7p7e8bHg2VTeD6j2FJZk8GVIhXWvSYctEw8JHr1.jpg', '2023-10-02 19:02:49', '2023-10-02 19:03:33', NULL),
(8, 'Allover Print Ruffle Trim Blouse', 'allover-print-ruffle-trim-blouse', 1, 1, '168', 'Free Returns ✓ Free Shipping On Orders.  Allover Print Ruffle Trim Blouse- Women Blouses at SHEIN.', 'product-photos/LWXmuaPLxanmTu6v4F7vVDb95dIeZtxc853xHXFm.jpg', '2023-10-02 19:06:32', '2023-10-02 19:06:32', NULL),
(9, 'Asos Tops | Top Asos Ballet Wrap With Pephem', 'asos-tops-top-asos-ballet-wrap-with-pephem', 1, 1, '167', 'Top Asos Never Wore, Very Sexy, Open Back', 'product-photos/mPQr9hlkIdaInemuALOPTYqnqNxAMhC0KcN0gDyZ.jpg', '2023-10-02 19:11:10', '2023-10-02 19:11:33', NULL),
(10, 'Dropped Shoulder Longline Shirt', 'dropped-shoulder-longline-shirt-with-pockets-deep-red', 1, 1, '168', 'Pattern type: Solid Style: Casual Features: Pockets Neckline: Collared neck Length: Long Sleeve length: Long sleeves Sleeve type: Dropped shoulders Sheer', 'product-photos/gQFC1ONwyi3tUZY4wl82KRCNDc4j9ZLbMd05bK1N.jpg', '2023-10-02 19:12:39', '2023-10-02 19:13:13', NULL),
(11, 'Como usar clochard do trabalho à balada', 'como-usar-clochard-do-trabalho-a-balada-steal-the-look', 2, 1, '166', 'it-girl - clochard - clochard - inverno - street-style', 'product-photos/f32ZvKcmQ8GepvefoTsoVCMle7wSJrWzGDPhGJov.jpg', '2023-10-02 19:35:36', '2023-10-02 19:36:17', NULL),
(12, 'Gray Wool Skirt Autumn Winter Midi Wool Skirt', 'gray-wool-skirt-autumn-winter-midi-wool-skirt-winter-skirt', 2, 1, '169', '★★ Welcome to my Ylistyle shop！！！ All our orders are tailor-made for you.', 'product-photos/ZBillTx673PPNFMttpR8gc0mwOOCr5ITIOPjnT9k.jpg', '2023-10-02 19:42:35', '2023-10-02 19:43:19', NULL),
(13, '100% Cotton Solid Side Zipper Casual Loose Skirt', '100-cotton-solid-side-zipper-casual-loose-skirt', 2, 1, '177', 'Cotton Solid Side Zipper Spliced Casual Loose Skirt for Women Color: Black,Green,Beige', 'product-photos/frYthQv8BSpLUxtCRFPp8lKjimLpar5CsaSHUOFI.jpg', '2023-10-02 19:44:26', '2023-10-02 19:46:14', NULL),
(14, 'faldas a rayas, faldas a rayas, faldas de moda', 'faldas-a-rayas-faldas-a-rayas-faldas-de-moda', 2, 1, '178', 'faldas a rayas, faldas a rayas, faldas de moda, faldas burdastyle', 'product-photos/vdfgIc5D3hZIrSDr4UHzIr23iGDzrS9YxvbA1ZKi.jpg', '2023-10-02 19:47:08', '2023-10-02 19:47:39', NULL),
(15, 'Opera 25 | peacock blue linen skirt', 'opera-25-peacock-blue-linen-skirt', 2, 1, '176', 'Influenced by Dior “New Look\", ladies in 1950 pursued extreme waist and a-line silhouette to highlight the ratio', 'product-photos/3b6bs15OKOVK8N6D4jcXaE8Row06NWL9FrXxi5Ab.jpg', '2023-10-02 19:49:21', '2023-10-02 19:49:21', NULL),
(16, 'Women\'s Bottoms - Pants, Jeans, Skirts & Shorts', 'women-s-bottoms-pants-jeans-skirts', 2, 1, '167', 'StyleWe\'s collection of women skirts can be paired with any top, any shoe', 'product-photos/dinAgMCuj3ZfLA0nfKpx8vDPNR8LFPAzb2t2h8V2.jpg', '2023-10-02 19:51:11', '2023-10-02 19:51:11', NULL),
(17, 'Women Striped A Line Retro Print Skirts Linen', 'women-striped-a-line-retro-print-skirts-linen', 2, 1, '178', 'Women Striped A Line Retro Print Skirts LinenFabric: 45% ramie 55% cottonSize & Fit: This garment fits true', 'product-photos/VcDENG4RKFu4bAbGGK3dccqzhMNriOHKYlO7rLJb.jpg', '2023-10-02 19:55:46', '2023-10-02 19:55:46', NULL),
(18, 'Polka dot skirt and soft pink sweater', 'polka-dot-skirt-and-soft-pink-sweater', 2, 1, '167', 'A polka dot skirt and a soft pink sweater worn with suede heels for a spring-appropriate look.', 'product-photos/1EtWW1Qppvo22Bs0GwJn7AIvliXWeXajbgd2HURy.jpg', '2023-10-02 19:56:57', '2023-10-02 19:56:57', NULL),
(19, '¿Quieres Saber La Combinación Perfecta Para Esta Temporada?', 'quieres-saber-la-combinacion-perfecta-para-esta-temporada', 2, 1, '177', 'Atrévete a mezclar estilo y comodidad, tendrás un excelente resultado!', 'product-photos/Jw1LxrBFKEBpXn1A6us6LFULjkYGmAKHXla3dB85.jpg', '2023-10-02 19:57:55', '2023-10-02 19:57:55', NULL),
(21, 'Plaid Printed Vintage Casual A-line Skirt, Plaid / M', 'plaid-printed-vintage-casual-a-line-skirt-plaid-m', 2, 1, '177', 'Plaid Printed Vintage Casual A-line Skirt, Plaid / M', 'product-photos/no4jbcwQmBKpNcmWlLs4ornJ2TSJUeXNVECpdnaD.jpg', '2023-10-02 20:03:26', '2023-10-02 20:03:41', NULL),
(22, '写真48/48｜ウジョー(UJOH) 2019年春夏ウィメン', '48-48-ujoh-2019', 3, 1, '177', 'ウジョー(UJOH)の2019年春夏ウィメンズコレクション。48枚の写真からウジョーのコーディネートがチェックできるので', 'product-photos/9mmzxh8RKjdF2T0OklVTH2C20tP1OkjdtlPQR9IJ.jpg', '2023-10-02 20:15:22', '2023-10-02 20:15:50', NULL),
(23, 'Kate Kasin Women Ruffle Sleeve Cover Up', 'kate-kasin-women-ruffle-sleeve-cover-up', 3, 1, '167', '98% Polyester, 2% Viscose This chiffon cropped bolero shrug comes with irregular ruffle design', 'product-photos/dtti3OOW06bwxF4OFxRIZFFGoTRod9WoyVvaRqe2.jpg', '2023-10-02 20:20:04', '2023-10-02 20:20:27', NULL),
(24, 'Women Retro Plaid Hooded Drawstring Single Breasted Coats', 'women-retro-plaid-hooded-drawstring-single-breasted-coats', 3, 1, '176', '[xlmodel]-[photo]-[0000] One Size: length 58cm, bust 130cm,shoulder 37-41cm,sleeve 43cm.', 'product-photos/8JnPoEIzVex12x9GAuGT38ZRZ1FHMppN0Xg74GMG.jpg', '2023-10-02 20:21:49', '2023-10-02 20:21:49', NULL),
(25, 'Women Turn Down Collar Long Sleeve Blazers', 'women-turn-down-collar-long-sleeve-cropped-blazers-2019', 3, 1, '178', 'Women Turn-Down Collar Long Sleeve Cropped Blazers 2019 Autumn Casual Solid Short Jacket', 'product-photos/Qr6XbDIOv7dL2ttUxc3yaVKaOz8LerHJdKEc2Eti.jpg', '2023-10-02 20:23:26', '2023-10-02 20:24:22', NULL),
(26, 'Naho Mihirogi×ROPÉ Perfect Light Outer', 'naho-mihirogi-rope-perfect-light-outer', 3, 1, '167', '春に向けて、人気エディター三尋木奈保さんとのコラボアイテムが到着！ ロペと三尋木さんは', 'product-photos/D6jQ5ZtDN8b0IrZvXRG6e5EqufznmfLUuZZabsY2.jpg', '2023-10-02 20:26:57', '2023-10-02 20:27:12', NULL),
(27, 'Women chocolate fine coat', 'women-chocolate-fine-coat-for-woman-stand-collar-button-down-coat', 3, 1, '177', 'Women chocolate top quality coat for woman stand collar Button Down coat', 'product-photos/6H5KGWzj1u1JAeoqocZ1IUWgIowYQSF8WOsN4M6Y.jpg', '2023-10-02 20:29:04', '2023-10-02 20:30:47', NULL),
(28, 'Modest Fall Fashion Casual Dress Outfit Ideas', 'modest-fall-fashion-casual-dress-outfit-ideas', 3, 1, '187', 'This product is designed to provide warmth and comfort for women during cold-weather', 'product-photos/caGq0MuekHiyFDImXOnXPxDH1weB14J4udXSVYmY.jpg', '2023-10-02 20:30:12', '2023-10-02 20:30:12', NULL),
(29, 'Chissy outfit', 'chissy-outfit', 3, 1, '188', 'classy, chic, classy outfit, chic outfit, aesthetic, bossy, bossy outfit, bossy outfit women, new aesthetic, aesthetic, aesthetic outfit, aesthetic outfits, types of aesthetic', 'product-photos/4z5sRjNLbwOiv4Hbgh4500HQOcNeNKwF2IxMB2VD.jpg', '2023-10-02 20:32:20', '2023-10-02 20:33:03', NULL),
(30, 'Plaid Colour Block Raglan Sleeve Double Breasted', 'plaid-colour-block-raglan-sleeve-double-breasted', 3, 1, '189', 'Multicolor Elegant Long Sleeve Polyester Colorblock,Plaid Pea Coat Embellished', 'product-photos/Dxy0AXkAyZZRPb8n2rwRdXe7AwVXHyzqpzSXrHfm.jpg', '2023-10-02 20:33:51', '2023-10-02 20:33:51', NULL),
(31, 'Women\'s Blazers | ZARA United States', 'women-s-blazers-zara-united-states', 3, 1, '199', 'FREE SHIPPING*. Get dressed up with this season\'s women\'s blazers at ZARA online and achieve effortless style', 'product-photos/TcfRgQGNCj6gy9clYD5HuEploe5cd0SdU36ZQSEp.jpg', '2023-10-02 20:35:27', '2023-10-02 20:35:27', NULL),
(32, 'Rosie the Riveter Costume Clothes', 'rosie-the-riveter-costume-clothes-shoes-hair-scarf', 4, 1, '167', 'The famous women\'s icon of the 1940s was Rosie the Riveter. She appeared in several ads', 'product-photos/7xHwXWMCMDtBThRjvIkrVlfITJ6Df6wJXcS9sBKe.jpg', '2023-10-02 20:41:44', '2023-10-02 20:42:26', NULL),
(33, 'STRAIGHT LEG PANTS - KELLY GREEN', 'straight-leg-pants-kelly-green', 4, 1, '177', 'Our Straight Leg Pants are designed for a flowy, relaxed fit. Made from lightweight material', 'product-photos/FhLx2NmTdpt3ZfkUMJwNNzEwSotcY6zn1rXgzjP9.jpg', '2023-10-02 20:43:17', '2023-10-02 20:43:31', NULL),
(34, '7 Ways to Wear Paper Bag Waist Pants', '7-ways-to-wear-paper-bag-waist-pants', 4, 1, '174', 'Move over jeans, paper bag waist pants are one of this season\'s hottest trends!', 'product-photos/K2HReCpfRdifvTn0hDn4HdSFupPeVyYupBdZw3tw.jpg', '2023-10-02 20:44:19', '2023-10-02 20:44:19', NULL),
(35, 'O Tecido Linho: Conheça suas Variações', 'o-tecido-linho-conheca-suas-variacoes', 4, 1, '177', 'Conheça o Tecido Linho, suas variações e quais roupas costurar com o Linho,', 'product-photos/GfSE5LbKPYaxpjW3WtkPL3UJfYbtlA0kgGTcwUAH.jpg', '2023-10-02 20:45:09', '2023-10-02 20:46:04', NULL),
(36, 'The 40 Most Expensive-Looking', 'the-40-most-expensive-looking-pieces-at-h', 4, 1, '176', 'These cool new summer finds are affordable, but they don\'t look it. Shop our Zara,', 'product-photos/rVp5xjOOFpZ5sMAbIKYhPK9WYbgPgKUWMj1Yc2l9.jpg', '2023-10-02 20:47:16', '2023-10-02 20:47:30', NULL),
(37, 'Women\'s Navy Long Sleeve Blouse', 'women-s-navy-long-sleeve-blouse', 4, 1, '177', 'Choose a navy long sleeve blouse and mustard wide leg pants', 'product-photos/hbGuPjiRjNux6DdagPVv1FM1f0lZw3ETIEhlpn3I.jpg', '2023-10-02 20:48:39', '2023-10-02 20:48:39', NULL),
(38, 'Women Palazzo Pants Ruffle Drawstring', 'women-palazzo-pants-ruffle-drawstring', 4, 1, '176', 'Full Length Material: Polyester-Cotton Model', 'product-photos/fCALmdyz6uBFT2BHGXKGmnJoq2mxVdVPb1MkZZKL.jpg', '2023-10-02 20:50:58', '2023-10-02 20:50:58', NULL),
(39, 'Lên danh sách những trang phục Thu cần có', 'len-danh-sach-nhung-trang-phuc-thu-can-co', 4, 1, '177', 'Những chỉ dẫn dưới đây sẽ giúp một cô nàng chân vòng kiềng có được lựa chọn', 'product-photos/DelMYVrDt5bBxjuGMGWlpGHcSEItHccFOVaWAiUm.jpg', '2023-10-02 20:51:56', '2023-10-02 20:51:56', NULL),
(40, 'Every Cool Spring Thing Is Hiding at Free People', 'insider-tip-every-cool-spring-thing-is-hiding-at-free-people', 4, 1, '175', 'Free People\'s new-arrivals section is flooded with some of spring\'s hottest 2019 trends.', 'product-photos/rsUXZyQxeyTmaQIRiflHn353P0UBbOI829xsf0mh.jpg', '2023-10-02 20:53:14', '2023-10-02 20:53:38', NULL),
(41, 'Free People\'s new-arrivals section is flooded', 'free-people-s-new-arrivals-section-is-flooded', 4, 1, '177', 'I have a thing for overalls. I was a teenager in the mid \'90s', 'product-photos/OVmxBsaGQZVFCaPCcrwjnHtp9abYkU25zLhyC9Sa.jpg', '2023-10-02 20:54:50', '2023-10-02 20:55:10', NULL),
(42, 'What to Pack for Summer in Europe • The Blonde Abroad', 'what-to-pack-for-summer-in-europe-the-blonde-abroad', 5, 1, '178', 'Europe is a stunning destination year round, but summer in Europe', 'product-photos/lTJahFnhUy9xozK90Gx84NyiJkd42HD5kWYEuEpp.jpg', '2023-10-02 20:57:36', '2023-10-02 20:57:36', NULL),
(43, 'Summer Hairstyles Featuring', '20-summer-hairstyles-featuring', 5, 1, '187', 'Summer is finally upon us and that means it’s the season of parties, weddings and outdoor', 'product-photos/PJmOm3JAtqrzaf4R7w2rGGaEns7JwGexKc8ls60p.jpg', '2023-10-02 20:58:53', '2023-10-02 20:59:29', NULL),
(44, 'Best Bridal Hair Accessories of 2023', 'best-bridal-hair-accessories-of-2023', 5, 1, '186', 'From floral combs to crystal barrettes, we\'ve researched the best bridal hair accessories', 'product-photos/VkBNoKATXUhIWwLwqLkAJj9Y6GQluHBtCbnap1ey.jpg', '2023-10-02 21:01:25', '2023-10-02 21:01:41', NULL),
(45, 'New York Fashion Week SS24 Is Here', 'new-york-fashion-week-ss24-is-here', 5, 1, '187', 'The city that never sleeps on good style.', 'product-photos/r72eZtfpyxGIVe3h2BkTUBOZK1yf3uOV3RivkPzg.jpg', '2023-10-02 21:02:50', '2023-10-02 21:02:50', NULL),
(46, '14K Gold Mesh Chain Bracelet with Dorika Balls', '14k-gold-mesh-chain-bracelet-with-dorika-balls', 5, 1, '187', '14K Gold Mesh Chain Bracelet with Dorika Balls, Round Mesh Woven Tubular Chain', 'product-photos/mxLjSzDLDKpwPfz8HYi4ALM2rH4c7BGoC9vLgIN7.jpg', '2023-10-02 21:05:15', '2023-10-02 21:05:15', NULL),
(47, 'Punk Rings Set For Women Girls Fashion', 'punk-rings-set-for-women-girls-fashion', 5, 1, '187', 'Punk Gold Wide Chain Rings Set For Women Girls Fashion Irregular Finger Thin Rings Gift 2021', 'product-photos/YO8Gl8R3LoudxW1UQZ2qmaFGMsrRzdlL0NtvysV3.jpg', '2023-10-02 21:06:04', '2023-10-02 21:06:04', NULL),
(48, 'SUMMER SUN HATS', 'summer-sun-hats', 5, 1, '187', 'Happy first day of summer folks! I\'m excited to welcome the season with open arms (pale as they may be) and plan to savour every hour of sunlight', 'product-photos/Lv2iNnWwZElfQff7CL6rJ12RaXgrvQ5iTIny1V9T.jpg', '2023-10-02 21:07:27', '2023-10-02 21:07:51', NULL),
(49, 'Hair Accessories For Every Occasion', '5-must-have-hair-accessories-for-every-occasion', 5, 1, '179', 'Love hair accessories? I\'m sharing beautiful casual and wedding hair accessories', 'product-photos/jcmahz4WBEGFDYC2KY0h4DkGiSJBD041HqNaQNzD.jpg', '2023-10-02 21:09:34', '2023-10-02 21:09:54', NULL),
(50, 'Como escolher o sapato de noiva ideal!', 'como-escolher-o-sapato-de-noiva-ideal', 5, 1, '176', 'Confira nossas dicas para escolher o sapato de noiva que irá valorizar e combinar', 'product-photos/p1MQkV88MtpViP2Bq2ImH92PDV3kF6iQgeOVbWNk.jpg', '2023-10-02 21:11:14', '2023-10-02 21:11:14', NULL),
(51, 'Cyflymder New Women Designer Backpacks', 'cyflymder-new-women-designer-backpacks', 5, 1, '187', 'Brand Name: Cyflymder Main Material: PU Capacity: Below 20 Litre Item Type', 'product-photos/n71B5BOiZESU7sDzYU2dBAQdi7NZTpWCQmocneGW.jpg', '2023-10-02 21:12:13', '2023-10-02 21:12:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HAE3kavAWMf4k29UKXq34.002Mf3PsCjrsoM81wC0pk1vM9oktggu', NULL, '2023-10-02 18:14:46', '2023-10-02 18:14:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
