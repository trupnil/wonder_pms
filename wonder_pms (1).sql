-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 01:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wonder_pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `account_group_id`, `created_at`, `updated_at`) VALUES
(2, 'XYZ account Name', 2, '2020-12-24 23:40:18', '2020-12-24 23:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `account_group`
--

CREATE TABLE `account_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_group_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_group`
--

INSERT INTO `account_group` (`id`, `account_group_name`, `account_group_code`, `created_at`, `updated_at`) VALUES
(2, 'Purchase', 'WPM-PUR', '2020-12-24 01:37:38', '2020-12-24 01:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `agreements`
--

CREATE TABLE `agreements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agreement_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `tenant_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `unit_type_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `tenant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponser_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_cr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement_start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement_end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_attach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_rent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agreements`
--

INSERT INTO `agreements` (`id`, `agreement_no`, `user_id`, `tenant_id`, `unit_id`, `unit_type_id`, `property_id`, `property_type_id`, `tenant_name`, `resident_card`, `passport`, `telephone`, `mobile`, `tenant_work`, `sponser_name`, `tenant_cr`, `unit_type_name`, `unit_name`, `period_of`, `agreement_start`, `agreement_end`, `document_attach`, `monthly_rent`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(10, '16087051395807684', 1, 4, 6, 9, 12, 9, 'Tenant-name1', '1608701843.PNGPIX-COM-Royal-Enfield-Classic-500-Green-Motorcycle-Bike-PNG-Image.png', 'Hs', 'Ktakalaatub', 'Gmn raahiaa lby', 'Fiupta', 'Hae', 'Afhrph', 'Unit-2-Land', 'Aaahe', '3', '2020-12-23', '2021-02-23', '1608705139.mlmm.png', '5', 'cash', 'active', '2020-12-23 01:02:19', '2020-12-23 01:02:19'),
(11, '1609483199981903246', 1, 5, 6, 9, 12, 9, 'Rmhk ansuaeae', '1608701870.mlmm.png', 'Aa', 'Nbnatk', 'Envhv aea', 'A aamih', 'Gi \' tyKnmalv', 'Afou', 'Unit-2-Land', 'Aaahe', '6', '2021-01-01', '2021-01-01', '1609483199.barun-ghosh-lZ4jn_xuCZk-unsplash.jpg', '100', 'Cheque', 'active', '2021-01-01 01:09:59', '2021-01-01 01:09:59'),
(12, '16098900112124872728', 1, 7, 9, 8, 13, 7, 'TRUPNIL', '1609889898.spices_highlight1.jpg', '123123123', '02652331676', '+918866174302', 'Developer', 'milan bhai', '123321123321', 'Emptyland', 'unit 2', '1', '2021-03-01', '2021-04-01', '1609890011.green-tea-in-a-cup.jpg', '100', 'cash', 'active', '2021-01-05 18:10:11', '2021-01-05 18:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_12_14_053650_create_property_types_table', 2),
(6, '2020_12_14_070323_create_properties_table', 3),
(7, '2020_12_14_091141_create_unit_type_table', 4),
(8, '2020_12_14_093827_create_unit_table', 5),
(9, '2020_12_15_020729_create_tenant_table', 6),
(10, '2020_12_17_063415_create_agreements_table', 7),
(12, '2020_12_23_070253_create_taxes_table', 8),
(14, '2020_12_24_063332_create_account_group_table', 9),
(16, '2020_12_30_050017_create__payment_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheque_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('unpaid','paid','partially') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `voucher_no`, `voucher_date`, `agreement_no`, `tenant_name`, `payment_date`, `month`, `payment_type`, `cheque_no`, `cheque_date`, `rent_amount`, `paid_amount`, `balance_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '3091', '01-01-21', '16087051395807684', 'Tenant-name1', '01-02-21', 'February', 'Cheque', '1231231', '24-02-21', '100', '100', '100', 'paid', '2020-12-31 22:24:02', '2020-12-31 22:24:02'),
(2, '6021', '01-01-21', '1609483199981903246', 'Rmhk ansuaeae', '02-01-21', 'January', 'cash', '1231231', '29-01-21', '100', '100', '100', 'paid', '2021-01-01 01:10:51', '2021-01-01 01:10:51'),
(3, '3936', '01-01-70', '1609483199981903246', 'Rmhk ansuaeae', '02-02-21', 'February', 'Cheque', '1231231', '25-02-21', '100', '100', '100', 'paid', '2021-01-01 02:06:23', '2021-01-01 02:06:23'),
(4, '79', '01-03-21', '16098900112124872728', 'TRUPNIL', '15-03-21', 'March', 'cash', NULL, '01-01-70', '100', '100', '100', 'paid', '2021-01-05 18:15:00', '2021-01-05 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `property_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_localname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `way_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `photos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_type_id`, `property_name`, `property_localname`, `property_no`, `way_no`, `street_no`, `landmark`, `area`, `city`, `country`, `user_id`, `photos`, `status`, `created_at`, `updated_at`) VALUES
(12, 8, 'Em nlDtr o', 'A kw\'ts t', 'H ttr  aaam m', 'Ra   sh gae', 'Raattaaauntb h', 'Auoak', 'Lhtar lhUgan', 'Tashlmta', 'K\' bi', 1, '1608701372.x.pagespeed.ic.eyqgIPeKH6.jpg', 'active', '2020-12-22 23:59:32', '2020-12-23 00:45:16'),
(13, 8, 'A haitei', 'AR', 'Rahiga', 'Hpa hganga', 'Hm aivnnu', 'Mga o aahD', 'EDgaah', 'G', 'Olt i', 1, '1608701408.PNGPIX-COM-Royal-Enfield-Classic-500-Green-Motorcycle-Bike-PNG-Image.png', 'active', '2020-12-23 00:00:08', '2020-12-23 00:00:08'),
(14, 9, 'Fvgnbign aya', 'A lewtpagprlnu', 'Gais namaoU', 'Aaaae', 'V', 'S tnp rfaiae', 'Baiynuualrth', 'Aktlan', 'Utn', 1, '1608701434.matrix-mlm-software.png', 'active', '2020-12-23 00:00:34', '2020-12-23 00:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type_localname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `property_type_name`, `property_type_localname`, `property_code`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'N', 'Ah  a hpt', 'Aeaah', 1, '2020-12-22 00:17:10', '2020-12-22 00:17:10'),
(8, 'Uahaee', 'Bttaaualh nu', 'GAaep atnnbuaeh', 1, '2020-12-22 00:17:22', '2020-12-22 00:17:22'),
(9, 'Aasuuapgt', 'Glnnana ol', 'Vlr', 1, '2020-12-22 00:17:50', '2020-12-22 00:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_percentage` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_localname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driving_lic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_spouse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_cr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponser_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id`, `tenant_name`, `tenant_localname`, `resident_card`, `driving_lic`, `passport`, `mobile`, `telephone`, `email`, `alternate_contact`, `country`, `state`, `provine`, `area`, `city`, `landmark`, `other_details`, `tenant_spouse`, `blood_group`, `tenant_work`, `photo`, `birthdate`, `tenant_cr`, `sponser_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Tenant-name1', 'Aamn\'tmt', '1608701843.PNGPIX-COM-Royal-Enfield-Classic-500-Green-Motorcycle-Bike-PNG-Image.png', 'H', 'Hs', '8866174302', 'Ktakalaatub', 'woesuze@biso.cr', 'Hefa aat', 'NDuattaihmh k\'a', 'A m', 'NovU Aifiivhl', 'K  au', 'Aamue ui', 'Kf', 'Uhtoj vi sageznun rumel ih ho wivebne rof ge pefnewiz kifug kan gu. Govsawfuk pogozho kigkud mubeda tec kitakuvo mutwud lipri teeb gof ihu epe cudvi labooce jot letu fekew. Mo nadti col suvpod ehrocfo apba caznoz jo riuw furopi maso dulemefe apu ovozijpi do fi zuvjupner. Rotu beet zorerpuc gac ca toijuda fok cefel ifaele kebam vamatto bo wim colempe pa zi. Rurita dilsed gohwij tacdekik juvasu tilat rigot uv be feppejve biguvugo ro rigo. Ku', 'Aagm', 'Gk e a', 'Fiupta', '1608701843.unnamed.png', '1961-05-09', 'Afhrph', 'Hae', 'active', '2020-12-23 00:07:23', '2020-12-23 00:07:23'),
(5, 'Rmhk ansuaeae', 'Abva', '1608701870.mlmm.png', 'MolnoOam', 'Aa', '9714535625', 'Nbnatk', 'peazuebe@soljowgev.nu', 'Y nvh h', 'AlynhDrolhbeeUl', 'Mtuo', 'Rw aylR gt', 'M AttKa', 'Uan \'rhaiyma', '\'vamahfo', 'Cometcic cokca lofre wunwoci gekjado eh pahiv he kogfo ru nacputhuj lel icacuvcu pepuk. Henegu wed puma purpif kem zikkud nolija pi wedwew uci novna rebduwhe udav haj anineak pekiz jopvi mi. Gi muz cagoddu lavhonu mujkozne amedope emfelu we vuni abajab co melaw ser ceizgav nakkicfe wek. Je wal', 'Vha uahrs', 'Th ar r', 'A aamih', '1608701870.unnamed.png', '1984-11-29', 'Afou', 'Gi \' tyKnmalv', 'active', '2020-12-23 00:07:50', '2020-12-23 00:07:50'),
(7, 'TRUPNIL', 'trupnil', '1609889898.spices_highlight1.jpg', '123123123', '123123123', '+918866174302', '02652331676', 'trupnil92@gmail.com', '9998887776', 'India', 'Gujarat', 'GC', 'Atladara', 'Vadodara', 'this is landmark-update', 'thid', 'Rosh', 'A+', 'Developer', '1609889898.grains and cereals.jpg', '2021-01-06', '123321123321', 'milan bhai', 'active', '2021-01-05 18:08:18', '2021-01-05 18:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_type_id` int(11) NOT NULL DEFAULT 1,
  `property_id` int(11) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `unit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_localname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit_type_id`, `property_id`, `property_type_id`, `unit_name`, `unit_localname`, `description`, `remark`, `photos`, `block_no`, `floor_no`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 9, 12, 9, 'Aaahe', 'Upt  gunt a', 'Owku baiwa ca mivaw kuper sekun sav ot ba eguvabe katgep mir. Gahle geg eh ectu ca johti uko japagfod ruc ic akifueci iv hujzaz ha erzam. Jer wupref cop kajherpes capvol kuk uwineh law vuvjokwo gahetot dij asocu. Paw muhvero wa nub radip kam sujibusak okmi vojhevgut teigto zedvalar ugimo mo. Labbev eprime vip fejumubu datnog no cepuftuv opsa gijuf ekisatvu wiara ju. Mevum ofide borus agmezwu juh uloz cikab ezi ugookijok ane vihenad ewgo lolna li. Eba f', 'Zojuz jotec tedjapimi ep diwmateg sem upafukak bimfek otgavgeh te lighonu raajtan socibma gu cuvot mav forfo sib. Ofkijhab jogvodbuw tavoluh oton tusat cucu jica en biw koije heh ahujani hecli. Guzki kintojup karedu lokildi ru kur cu dincufci ifobu ebhene si jole coragaku os janporeke zusih todleano. Umosoljiz duve eltiw gehsorob cisijhov odfad befjuvudo itojo ojpomtuj ropizemib mito ekbi', '1608701553.unnamed.png', 'Lt', 'AUk\'nwleh', 'active', 1, '2020-12-23 00:02:33', '2020-12-23 00:02:33'),
(9, 8, 12, 8, 'unit 2', 'AhnO aloa bmg', 'Obsehe vim miw asemawo musbanaj sime topnihuk suzficuh ucruv ecda tal lupi ur. Cojiz murted fuv usevus sejilwar cuucfa', 'Wok kahew opfubcig tulesen elocoti car ma wev kaetedo fuojjub oja hojima livoza. Ozatado wa iznif ecovina wumba calok hagpu tof celahod sisumake jirege aveovbek gan', '1608704677.matrix-mlm-software.png', 'Taetaua', 'Asu', 'active', 1, '2020-12-23 00:54:37', '2020-12-23 00:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `unit_type`
--

CREATE TABLE `unit_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_type_localname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_type`
--

INSERT INTO `unit_type` (`id`, `unit_type_name`, `unit_type_localname`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'Emptyland', 'أرض فارغة', 1, '2020-12-22 00:05:30', '2020-12-22 00:05:30'),
(9, 'Unit-2-Land', 'الوحدة -2- أرض', 1, '2020-12-22 00:06:27', '2020-12-22 00:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$V9Ynu6TPtHryTxlKmuGtouQ0cpsCnYGDkNMO.JjB49/qh.HH35/Ee', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_group`
--
ALTER TABLE `account_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agreements`
--
ALTER TABLE `agreements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_type`
--
ALTER TABLE `unit_type`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `account_group`
--
ALTER TABLE `account_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agreements`
--
ALTER TABLE `agreements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `unit_type`
--
ALTER TABLE `unit_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
