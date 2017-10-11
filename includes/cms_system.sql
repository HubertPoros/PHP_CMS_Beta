-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Mar 2017, 15:00
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cms_system`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `category_name` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`c_id`, `category_name`) VALUES
(1, 'home'),
(2, 'soccer'),
(3, 'koszykowka'),
(4, 'reczna'),
(6, 'formula 1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `subject` text CHARACTER SET latin1 NOT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`comment_id`, `name`, `email`, `subject`, `comment`, `date`) VALUES
(1, 'Hubert', 'Hubert.Poros@Gmail.com', 'Test', '', '2017-02-16 02:17:03'),
(2, 'Hubert', 'Hubert.Poros@Gmail.com', 'Test', '', '2017-02-16 02:18:28'),
(3, 'Hubert Poros', 'Hubert.Poros@Gmail.com', 'Uploaded', 'sadasdasd', '2017-02-16 02:21:39'),
(4, 'askdmaslkdma', 'amsldams@aksdas.com', 'aksmdkla', 'aklsmdlkamdklnqwkjebqwkndiasndas\r\n', '2017-03-12 00:37:40');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL,
  `image` text COLLATE utf8_polish_ci NOT NULL,
  `category` text COLLATE utf8_polish_ci NOT NULL,
  `status` mediumtext COLLATE utf8_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `category`, `status`, `date`, `author`) VALUES
(25, 'Hiszpania: Athletic Bilbao wygraÅ‚ derby Kraju BaskÃ³w', 'GoÅ›cie objÄ™li prowadzenie w starciu derbowym w 28 minucie. Rzut karny wykorzystaÅ‚ Raul Garcia. Po przerwie drugiego gola strzeliÅ‚ dla przyjezdnych Inaki Williams.\r\n\r\nDruÅ¼yna z Estadio Anoeta po tej poraÅ¼ce zajmuje piÄ…te miejsce w ligowej tabeli, majÄ…c na swoim koncie 48 punktÃ³w. W nastÄ™pnej kolejce zagra na wyjeÅºdzie z Deportivo Alaves.\r\n\r\nNatomiast ekipa z San Mames plasuje siÄ™ na siÃ³dmej pozycji ze zdobytymi 44 "oczkami". Jej kolejnym rywalem bÄ™dzie Real Madryt.', 'https://ocdn.eu/pulscms-transforms/1/EwvktkqTURBXy8zYjk2NzE4NWI3YTg5OTY5ZjM5NzI3MjY5YWMzYTM0Zi5qcGVnk5UDAADNDIDNBwiTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '2', 'publish', '2017-03-12 13:44:04', 'admin'),
(26, 'Ronald Koeman: naszym celem sÄ… europejskie puchary', '- To byÅ‚ wspaniaÅ‚y zespoÅ‚owy wystÄ™p. W drugiej poÅ‚owie kontrolowaliÅ›my mecz. Nasza organizacja w obronie przy staÅ‚ych fragmentach byÅ‚a Å›wietna - powiedziaÅ‚ Koeman, cytowany przez "BBC".\r\n\r\n- Zawsze bÄ™dziemy strzelaÄ‡ bramki, bo mamy odpowiednich zawodnikÃ³w. Romelu Lukaku zwykle strzela gola w kaÅ¼dym meczu. Trzeba jednak walczyÄ‡, broniÄ‡ i biegaÄ‡. Nasz pressing w Å›rodku pola byÅ‚ Å›wietny - podkreÅ›liÅ‚.\r\n\r\n- Naszym celem jest gra w europejskich pucharach w przyszÅ‚ym sezonie. Wiemy, Å¼e byÄ‡ moÅ¼e pozwoli nam na to zajÄ™cie siÃ³dmego miejsca - zakoÅ„czyÅ‚ holenderski szkoleniowiec.\r\n\r\nEkipa z niebieskiej czÄ™Å›ci dzielnicy Merseyside zajmuje siÃ³dmÄ… pozycjÄ™ ze stratÄ… dwÃ³ch punktÃ³w do Manchesteru United. "Czerwone DiabÅ‚y" majÄ… jednak dwa mecze zalegÅ‚e do rozegrania. Everton w nastÄ™pnej kolejce zmierzy siÄ™ na Goodison Park z Hull City.', 'https://ocdn.eu/pulscms-transforms/1/autktkqTURBXy83NjU0NDRhNDY4MTBjYTE1NDU5ZTM1NDBmY2FkOGFkMS5qcGVnk5UDAE7NEyDNCsKTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '2', 'publish', '2017-03-12 01:36:14', 'admin'),
(27, 'Janusz Gol moÅ¼e cieszyÄ‡ siÄ™ z wygranej z Zenitem', 'Amkar Perm z Januszem Golem w skÅ‚adzie odniÃ³sÅ‚ cenne zwyciÄ™stwo 1:0 nad Zenitem Sankt Petersburg w niedzielnym meczu 19. kolejki rosyjskiej Premier Ligi. PoraÅ¼ka sprawiÅ‚a, Å¼e Zenit w tabeli jest trzeci, a miejsce to nie gwarantuje udziaÅ‚u w eliminacjach Ligi MistrzÃ³w. PiÄ…ty Amkar traci do ZenitczykÃ³w szeÅ›Ä‡ punktÃ³w.\r\n\r\nNa nic zdaÅ‚a siÄ™ podopiecznym trenera Mircei Lucescu ogromna przewaga w posiadaniu piÅ‚ki (70 proc.) i mniejsza w celnych strzaÅ‚ach (5-3). Jedynego gola w 33. minucie strzeliÅ‚ dla gospodarzy Roland GigoÅ‚ajew, wykorzystujÄ…c podanie Chumy Anene.\r\n\r\nJanusz Gol rozegraÅ‚ caÅ‚y mecz, a w 73. minucie ukarany zostaÅ‚ Å¼Ã³Å‚tÄ… kartkÄ…. W tym sezonie 31-letni pomocnik pojawiÅ‚ siÄ™ juÅ¼ na boisku w 15 ligowych spotkaniach, za kaÅ¼dym razem wybiegajÄ…c w pierwszym skÅ‚adzie Amkara. ByÅ‚y piÅ‚karz Legii Warszawa w tym sezonie strzeliÅ‚ jednego gola w lidze.\r\n\r\nLiderem rosyjskiej Premier Ligi jest Spartak Moskwa, ktÃ³ry zgromadziÅ‚ dotÄ…d 41 punktÃ³w. CSKA Moskwa ma, podobnie jak Zenit, 36 punktÃ³w i zajmuje drugie miejsce. BezpoÅ›redni awans do fazy grupowej Ligi MistrzÃ³w daje wyÅ‚Ä…cznie mistrzostwo, a wicemistrzostwo premiowane jest grÄ… w kwalifikacjach.', 'https://ocdn.eu/pulscms-transforms/1/2jTktkqTURBXy9iMDgyY2RiZGZhNzM2MzcyOTgyN2Q5ZDBlOGViZjBhYS5qcGVnk5UDAADNCgDNBaCTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '2', 'publish', '2017-03-12 01:37:06', 'admin'),
(28, 'Slaven BiliÄ‡: zdecydowanie zasÅ‚uÅ¼yliÅ›my na coÅ› wiÄ™cej', 'West Ham United przegraÅ‚ po szalonym meczu na wyjeÅºdzie z AFC Bournemouth 2:3. Slaven BiliÄ‡, menedÅ¼er MÅ‚otÃ³w, Å¼aÅ‚owaÅ‚, Å¼e jego podopieczni nie zdobyli choÄ‡by punktu.\r\n\r\nGospodarze zmarnowali dwa rzuty karne. Ekipa z Londynu najpierw prowadziÅ‚a, a potem musiaÅ‚a odrabiaÄ‡ straty. W samej koÅ„cÃ³wce straciÅ‚a trzeciÄ… bramkÄ™, ktÃ³ra przesÄ…dziÅ‚a o jej poraÅ¼ce.\r\n\r\n- Zdecydowanie zasÅ‚uÅ¼yliÅ›my na coÅ› wiÄ™cej. Rywale zagrali jednak dobrze i grali z wielkÄ… agresjÄ… - powiedziaÅ‚ BiliÄ‡, cytowany przez "BBC".\r\n\r\n- Przeciwnicy zmarnowali dwa rzuty karne, wiÄ™c mieliÅ›my szczÄ™Å›cie, Å¼e przegrywaliÅ›my tylko jednym golem. MieliÅ›my okazjÄ™, aby prowadziÄ‡ dwiema bramkami, ale ich nie wykorzystaliÅ›my i dlatego jesteÅ›my rozczarowani - przyznaÅ‚ chorwacki szkoleniowiec.\r\n\r\n- Przy remisie szukaliÅ›my trzeciego gola. Zbyt wielu zawodnikÃ³w poszÅ‚o do ataku i zostawiliÅ›my rywalom miejsce na kontrÄ™ - stwierdziÅ‚.\r\n\r\n- Kiedy strzelasz dwa gole na wyjeÅºdzie, to powinieneÅ› mieÄ‡ jakÄ…Å› zdobycz. MieliÅ›my ostatnio dobre wyniki na wyjazdach i teraz takÅ¼e pokazaliÅ›my jakoÅ›Ä‡, doprowadzajÄ…c do wyrÃ³wnania - podsumowaÅ‚.\r\n\r\nZespÃ³Å‚ ze stolicy po tej poraÅ¼ce zajmuje 11. miejsce w tabeli, majÄ…c dziewiÄ™Ä‡ punktÃ³w przewagi nad strefÄ… spadkowÄ…. W nastÄ™pnej kolejce zagra u siebie z Leicester City.', 'https://ocdn.eu/pulscms-transforms/1/uLrktkqTURBXy9lMjU3ZTAwZDkwYTk4NjEwMmQxNTAxMzQ0OWU1MmQ3ZS5qcGVnk5UDAADNDhDNB-mTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '2', 'publish', '2017-03-12 01:37:32', 'admin'),
(29, 'Nice I liga: wypadek podczas meczu GKS-u Tychy', 'Jak informuje "Dziennik Zachodni", podczas meczu Nice I ligi pomiÄ™dzy GKS-em Tychy a MKS-em Kluczbork doszÅ‚o do wypadku. 15-latek wspinaÅ‚ siÄ™ po elewacji stadionu i spadÅ‚ z wysokoÅ›ci drugiego piÄ™tra.\r\n\r\nSprawca caÅ‚ego zamieszania ma zÅ‚amanÄ… rÄ™kÄ™. Badania wykaÅ¼Ä…, czy odniÃ³sÅ‚ inne obraÅ¼enia. - 15-latek spadÅ‚ z wysokoÅ›ci mniej wiÄ™cej drugiego piÄ™tra. WspinaÅ‚ siÄ™ po zewnÄ™trznej stronie stadionu, po elewacji i spadÅ‚. ZostaÅ‚ przetransportowany Å›migÅ‚owcem do szpitala w Ligocie - powiedziaÅ‚a na Å‚amach "Dziennika Zachodniego" asp. Barbara KoÅ‚odziejczyk.\r\n\r\nSteward, ktÃ³ra byÅ‚a w pobliÅ¼u wydarzenia, zostaÅ‚a juÅ¼ przesÅ‚uchana.', 'https://ocdn.eu/pulscms-transforms/1/rn4ktkqTURBXy84ZGVkNWY5MWZkOGQ4NTU2ODYwN2RiOTkzODJlNzMwYS5qcGVnk5UDAMyVzRC8zQlpkwXNAxTNAbyVB9kyL3B1bHNjbXMvTURBXy8xNDBiMWNmZTdmMGFjNTJlZGMwMTBkNzA5NzhlODRiZS5wbmcAwgA', '2', 'publish', '2017-03-12 01:38:04', 'admin'),
(30, 'Paul Clement: musimy siÄ™ odbudowaÄ‡', 'Swansea City AFC przegraÅ‚ na wyjeÅºdzie z Hull City 1:2 w sobotnim meczu Premier League. Paul Clement, menedÅ¼er ÅabÄ™dzi, byÅ‚ rozczarowany tym, w jaki sposÃ³b jego podopieczni stracili bramki.\r\n\r\n- Nie broniliÅ›my dobrze w tym meczu. Przez dÅ‚ugie okresy wyglÄ…daÅ‚o, Å¼e mamy kontrolÄ™ nad meczem i stwarzaliÅ›my sobie sytuacje z kontrataku - powiedziaÅ‚ Clement, cytowany przez "BBC".\r\n\r\n- Dwie kontuzje w pierwszej poÅ‚owie mocno na nas wpÅ‚ynÄ™Å‚y i w drugiej odsÅ‚onie byliÅ›my ograniczeni w naszych staraniach. Urazu nabawiÅ‚ siÄ™ Martin Olsson i musieliÅ›my graÄ‡ do koÅ„ca spotkania z kontuzjowanym zawodnikiem. JesteÅ›my jednak rozczarowani ze wzglÄ™du na to, jak rywale strzelili bramki i jak bardzo siÄ™ otworzyliÅ›my - stwierdziÅ‚.\r\n\r\nWalijska druÅ¼yna zajmuje 16. miejsce w tabeli. Nad strefÄ… spadkowÄ… ma trzy punkty przewagi.\r\n\r\n- Jest jeszcze wiele meczÃ³w do rozegrania. Nie uwaÅ¼aÅ‚em, Å¼e byliÅ›my juÅ¼ bliscy bezpiecznej strefy i teraz takÅ¼e nie jesteÅ›my. Mamy do rozegrania 10 spotkaÅ„ i musimy siÄ™ odbudowaÄ‡ w nastÄ™pny weekend w starciu z Bournemouth - podkreÅ›liÅ‚.', 'https://ocdn.eu/pulscms-transforms/1/37tktkqTURBXy84NWE3Mjk4NWNkZmNiNmI2Yzk1MjZjNmVjMTQ2YmFhYi5qcGVnk5UDAM0CIs0UbM0LfJMFzQMUzQG8lQfZMi9wdWxzY21zL01EQV8vMTQwYjFjZmU3ZjBhYzUyZWRjMDEwZDcwOTc4ZTg0YmUucG5nAMIA', '2', 'publish', '2017-03-12 01:38:31', 'admin'),
(31, 'Rastko StojkoviÄ‡: w Kielcach nadal mam przyjaciÃ³Å‚', '"CieszÄ™ siÄ™, Å¼e w Kielcach nadal mam tylu przyjaciÃ³Å‚" â€“ powiedziaÅ‚ po spotkaniu Ligi MistrzÃ³w piÅ‚karzy rÄ™cznych z Vive Tauron Kielce obrotowy Mieszkowa BrzeÅ›Ä‡ Rastko StojkoviÄ‡. ByÅ‚y zawodnik kieleckiej druÅ¼yny zostaÅ‚ owacyjnie przywitany przez fanÃ³w mistrza Polski.\r\n\r\nSerbski obrotowy byÅ‚ najskuteczniejszym zawodnikiem swojego zespoÅ‚u w tym spotkaniu. Jednak szeÅ›Ä‡ bramek Stojkovicia nie uchroniÅ‚o ekipy z BrzeÅ›cia przed poraÅ¼kÄ… 27:35. GoÅ›cie pozostawili po sobie jednak bardzo dobre wraÅ¼enie, bo przez 45 minut byli rÃ³wnorzÄ™dnym rywalem dla Vive. â€žNaprawdÄ™ graliÅ›my wtedy bardzo dobrze. UwaÅ¼nie w obronie, skutecznie w ataku, do tego wychodziÅ‚y nam kontryâ€ â€“ analizowaÅ‚ grÄ™ swojego zespoÅ‚u StojkoviÄ‡.\r\n\r\nJeszcze na 17 minut przed koÅ„cem mistrz BiaÅ‚orusi prowadziÅ‚ trzema bramkami. PÃ³Åºniej jednak zawodnicy trenera Siergieja Bebeszki nie mieli juÅ¼ nic do powiedzenia. â€žPo prostu zabrakÅ‚o nam juÅ¼ siÅ‚. Vive ma szerszÄ… kadrÄ™ i nie ma co ukrywaÄ‡, jest lepszym zespoÅ‚em. Wykorzystywali kaÅ¼dy nasz najmniejszy bÅ‚Ä…d. WidaÄ‡, Å¼e kielczanie wracajÄ… do rÃ³wnowagi po ostatnich poraÅ¼kach. Å»yczÄ™ kieleckiej druÅ¼ynie ponownego awansu do Final Four Ligi MistrzÃ³w.\r\n\r\nGorycz po poraÅ¼ce osÅ‚odziÅ‚o serbskiemu szczypiorniÅ›cie przyjÄ™cie przez kieleckich fanÃ³w. Przed meczem StojkoviÄ‡ zostaÅ‚ owacyjnie przywitany przez miejscowych kibicÃ³w, a po spotkaniu rozdaÅ‚ mnÃ³stwo autografÃ³w.\r\n\r\nâ€žDo Kielc zawsze przyjeÅ¼dÅ¼am z radoÅ›ciÄ…. PrzeÅ¼yÅ‚em tu wspaniaÅ‚e chwile. To bardzo miÅ‚e, Å¼e kieleccy kibice o mnie nie zapomnieli. CieszÄ™ siÄ™, Å¼e w Kielcach nadal mam tylu przyjaciÃ³Å‚â€ â€“ powiedziaÅ‚ wyraÅºnie wzruszony Serb.\r\n\r\nStojkoviÄ‡ graÅ‚ w Vive przez cztery sezony (2009-13). Z kieleckÄ… druÅ¼ynÄ… zdobyÅ‚ trzy tytuÅ‚y mistrza Polski i cztery razy siÄ™gaÅ‚ po Puchar Polski. W sezonie 2012/2013 zajÄ…Å‚ z zespoÅ‚em ze stolicy regionu Å›wiÄ™tokrzyskiego trzecie miejsce w Lidze MistrzÃ³w. W decydujÄ…cym meczu z THW Kiel rzuciÅ‚ 8 bramek.', 'https://ocdn.eu/pulscms-transforms/1/4aiktkqTURBXy9lMmU3OWFlZjc5MDRlYTIwZjM4OTk2YjIyNTA3MjU1MS5qcGVnk5UDATzND1rNCKKTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '4', 'publish', '2017-03-12 01:51:15', 'admin'),
(32, 'LM piÅ‚karzy rÄ™cznych: dotkliwa poraÅ¼ka Orlen WisÅ‚y PÅ‚ock', 'FC Barcelona pokonaÅ‚a przed wÅ‚asnÄ… publicznoÅ›ciÄ… Orlen WisÅ‚Ä™ PÅ‚ock 36:28 (17:15) w meczu fazy grupowej Ligi MistrzÃ³w piÅ‚karzy rÄ™cznych. Polski zespÃ³Å‚ wciÄ…Å¼ nie jest tym samym pewny awansu do fazy play-off, a jego los leÅ¼y w rÄ™kach rywali.\r\n\r\nRywala Orlen WisÅ‚y nikomu przedstawiaÄ‡ nie byÅ‚o trzeba. Ekipa Piotra Przybeckiego mierzyÅ‚a siÄ™ z wielkÄ… BarcelonÄ…, ktÃ³ra w pierwszym spotkaniu, rozgrywanym w Polsce, daÅ‚a jej srogÄ… lekcjÄ™ piÅ‚ki rÄ™cznej wygrywajÄ…c 28:23. TakÅ¼e i tym razem byÅ‚a murowanym faworytem, choÄ‡ fani w naszym kraju liczyli na sprawienie sensacji, jakÄ… bez wÄ…tpienia byÅ‚oby zwyciÄ™stwo przyjezdnych.\r\n\r\nOrlen WisÅ‚a bardzo potrzebowaÅ‚a z resztÄ… punktÃ³w. Na kolejkÄ™ przed koÅ„cem fazy grupowej zajmowaÅ‚a w tabeli co prawda dajÄ…ce awans, szÃ³ste miejsce, lecz po piÄ™tach deptaÅ‚ jej Bjerringbro/Silkeborg, ktÃ³ry w przypadku pokonania Kadetten i poraÅ¼ki polskiego zespoÅ‚u mÃ³gÅ‚ wyeliminowaÄ‡ go z dalszych rozgrywek.\r\n\r\nEkipa Przybeckiego zaczÄ™Å‚a bardzo ambitnie. ObjÄ™Å‚a prowadzenie po celnym rzucie Å»ytnikowa, ale juÅ¼ po chwili gospodarze odrobili stratÄ™ z nawiÄ…zkÄ…. Po kwadransie gry prowadzili 9:6, ale pozwalali polskiej ekipie na zaskakujÄ…co wiele, a ona bez kompleksÃ³w z tego korzystaÅ‚a. WalczyÅ‚a bardzo ambitnie, po 20 minutach zdoÅ‚aÅ‚a zmniejszyÄ‡ stratÄ™ do zaledwie jednego gola (11:10), ale do remisu doprowadziÄ‡ nie zdoÅ‚aÅ‚a. Barcelona wrzuciÅ‚a piÄ…ty bieg, ponownie odskoczyÅ‚a (16:12), lecz w koÅ„cÃ³wce pierwszej poÅ‚owy Orlen WisÅ‚a ponownie zdoÅ‚aÅ‚a zredukowaÄ‡ rÃ³Å¼nicÄ™, koÅ„czÄ…c jÄ… z wynikiem 17:15 dla gospodarzy.\r\n\r\nTo pozwalaÅ‚o wierzyÄ‡, Å¼e Orlen WisÅ‚a po zmianie stron pokusi siÄ™ o sprawienie sensacji. Gospodarze bÅ‚yskawicznie wyleczyli jÄ… jednak z marzeÅ„. Szybko odskoczyli na aÅ¼ szeÅ›Ä‡ goli (22:16), co w praktyce rozstrzygnÄ™Å‚o losy pojedynku. Polski zespÃ³Å‚ robiÅ‚ wszystko co mÃ³gÅ‚, Przybecki prosiÅ‚ o czas, by dodatkowo zmotywowaÄ‡ podopiecznych, ale rÃ³Å¼nica zamiast maleÄ‡, ciÄ…gle rosÅ‚a. Kwadrans przed koÅ„cem meczu wynosiÅ‚a juÅ¼ dziesiÄ™Ä‡ goli (27:17).\r\n\r\nPrzed ostatnim gwizdkiem polska ekipa zdoÅ‚aÅ‚a nieco zniwelowaÄ‡ rozmiary poraÅ¼ki. Ostatecznie przegraÅ‚a 28:36 i wciÄ…Å¼ nie jest pewna awansu do fazy play-off. Jej los leÅ¼y w rÄ™kach rywali, a konkretniej Bjerringbro/Silkeborg i Kadetten, ktÃ³re swÃ³j mecz rozegrajÄ… w niedzielÄ™.', 'https://ocdn.eu/pulscms-transforms/1/TvMktkqTURBXy9iZTZhYmEwYmRkOWM2MTE1YjdiOGVlM2UzN2I0Y2I3ZC5qcGVnk5UDAgDNC9HNBqWTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '4', 'publish', '2017-03-12 01:52:44', 'admin'),
(33, 'Karol Bielecki: przed meczem byÅ‚o sporo nerwÃ³w', '"Po ostatnich przegranych spotkaniach w naszym zespole byÅ‚o sporo nerwowoÅ›ci" â€“ przyznaÅ‚ po zakoÅ„czeniu meczu Ligi MistrzÃ³w piÅ‚karzy rÄ™cznych z Mieszkowem BrzeÅ›Ä‡, wygranym 35:27, rozgrywajÄ…cy Vive Tauron Kielce Karol Bielecki.\r\n\r\n"To byÅ‚ bardzo trudny pojedynek, ale ostatni kwadrans zagraliÅ›my bardzo dobrze" â€“ dodaÅ‚.\r\n\r\nW meczu z mistrzem BiaÅ‚orusi jeszcze na 17 minut przed koÅ„cem kielczanie przegrywali trzema bramkami. "Po ostatnich przegranych spotkaniach w Lidze MistrzÃ³w w naszym zespole byÅ‚o trochÄ™ nerwowo. WidaÄ‡ to byÅ‚o zwÅ‚aszcza w pierwszej poÅ‚owie i na poczÄ…tku drugiej odsÅ‚ony. ChcieliÅ›my wygraÄ‡, ale jak siÄ™ musi to nie zawsze wychodzi" â€“ podkreÅ›liÅ‚ Bielecki.\r\n\r\n"Na szczÄ™Å›cie zdÄ…Å¼yliÅ›my to wszystko poukÅ‚adaÄ‡ i ostatnie 15 minut zagraliÅ›my bardzo dobrze" â€“ dodaÅ‚ z satysfakcjÄ… popularny â€žKolaâ€. Trudno siÄ™ nie zgodziÄ‡ z rozgrywajÄ…cym kieleckiego zespoÅ‚u. Ostatni kwadrans meczu z druÅ¼ynÄ… z BrzeÅ›cia to prawdziwy koncert mistrzÃ³w Polski.\r\n\r\n"UwierzyliÅ›my w siebie. ZaczÄ™liÅ›my graÄ‡ duÅ¼o kontr i Å›wietnie broniÅ‚ SÅ‚awek Szmal. KoÅ„cÃ³wka w naszym wykonaniu byÅ‚a naprawdÄ™ dobra i oby takich spotkaÅ„ byÅ‚o w naszym wykonaniu coraz wiÄ™cej" â€“ wyraziÅ‚ nadziejÄ™ rozgrywajÄ…cy Vive Piotr Chrapkowski.\r\n\r\nBielecki po zakoÅ„czeniu spotkania podkreÅ›liÅ‚ fantastyczny doping kieleckich fanÃ³w. "Kiedy graliÅ›my sÅ‚abiej i szukaliÅ›my swojej optymalnej formy, oni caÅ‚y czas byli z nami. Dawali nam nawet wsparcie po przegranych meczach w Lidze MistrzÃ³w. CaÅ‚y czas to czujemy i dzisiaj ich doping bardzo nam pomÃ³gÅ‚" â€“ dziÄ™kowaÅ‚ kieleckim kibicom zawodnik.\r\n\r\nKielecka druÅ¼yna zajÄ™Å‚a ostatecznie drugie miejsce w grupie B. W 1/8 finaÅ‚u LM przeciwnikiem Vive bÄ™dzie francuski zespÃ³Å‚ Montpellier HB. â€žNajwaÅ¼niejsze, Å¼e rewanÅ¼ zagramy u siebie, to spory handicap. Ale na razie o tym nie myÅ›limy. Na analizÄ™ gry francuskiej druÅ¼yny przyjdzie jeszcze czas. Teraz przed nami mecze ligowe, na nich siÄ™ skupiamyâ€ â€“ zapewniÅ‚ Chrapkowski.', 'https://ocdn.eu/pulscms-transforms/1/XXTktkpTURBXy81ZjE5NTFlZmIyYTgxNTk1YmNiOGEwMTNhZDA1MDc2OS5qcGeTlQMBAM0Jvs0FepMFzQMUzQG8lQfZMi9wdWxzY21zL01EQV8vMTQwYjFjZmU3ZjBhYzUyZWRjMDEwZDcwOTc4ZTg0YmUucG5nAMIA', '4', 'publish', '2017-03-12 01:53:24', 'admin'),
(35, 'NBA: Washington Wizards wygrali po kontrowersyjnej akcji w dogrywce', 'Na telewizyjnych powtÃ³rkach wyraÅºnie widaÄ‡ byÅ‚o, jak Markieff Morris z ekipy CzarodziejÃ³w tuÅ¼ przed oddaniem przechylajÄ…cego szalÄ™ na korzyÅ›Ä‡ Wizards rzutu stawia krok na linii bocznej, czyli zgodnie z zasadami wychodzi poza plac gry.\r\n\r\nGdy sytuacjÄ™ pokazano na telebimie, kibice w Moda Center domagali siÄ™ zmiany decyzji przez sÄ™dziÃ³w, ktÃ³rzy zaliczyli punkty. To nie byÅ‚o jednak moÅ¼liwe - zgodnie z zasadami obowiÄ…zujÄ…cymi w NBA akurat tego typu wÄ…tpliwoÅ›ci nie mogÄ… byÄ‡ rozstrzygane na podstawie powtÃ³rek wideo.\r\n\r\nMarcin Gortat miaÅ‚ swÃ³j wkÅ‚ad w triumf, byÅ‚ obecny na boisku w kluczowych minutach i zdobyÅ‚ waÅ¼ne punkty w dogrywce po dobitce niecelnego rzutu Portera. ÅÄ…cznie graÅ‚ przez 34 minuty, w trakcie ktÃ³rych oddaÅ‚ osiem rzutÃ³w i trafiÅ‚ szeÅ›Ä‡ z nich.\r\n\r\nPolak doÅ‚oÅ¼yÅ‚ teÅ¼ trzy celne prÃ³by na szeÅ›Ä‡ rzutÃ³w wolnych - w sumie zdobyÅ‚ 15 punktÃ³w. 15-krotnie zbieraÅ‚ piÅ‚kÄ™ w walce pod tablicami, byÅ‚ najskuteczniej zbierajÄ…cym zawodnikiem spotkania. Statystyki uzupeÅ‚niÅ‚ asystÄ… i trzema faulami, nie miaÅ‚ ani jednej straty.', 'https://ocdn.eu/pulscms-transforms/1/ScrktkpTURBXy8zNjRmODcxMWE5MmVmN2YzOWQxOTE1ZDkzY2Q1YmZiMi5qcGeTlQMAzJbNENXNCXeTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '3', 'publish', '2017-03-12 01:56:15', 'admin'),
(36, 'F1: Carlos Sainz spodziewa siÄ™ ciÄ™Å¼kiego poczÄ…tku sezonu', 'Carlos Sainz stwierdziÅ‚, Å¼e reprezentowanej przez niego ekipie Toro Rosso moÅ¼e byÄ‡ bardzo trudno znaleÅºÄ‡ siÄ™ w finaÅ‚owym segmencie kwalifikacji w otwierajÄ…cym sezon 2017 wyÅ›cigu o Grand Prix Australii.\r\n\r\nPo zimowych testach na torze Catalunya satelicki team Red Bulla wydaje siÄ™ w dobrej dyspozycji. Sam Hiszpan, ktÃ³ry w ubiegÅ‚ym roku dziewiÄ™ciokrotnie znalazÅ‚ siÄ™ w Q3, mimo faktu, Å¼e team z Faenzy korzystaÅ‚ ze starego silnika Ferrari przekonuje jednak, iÅ¼ na Albert Park w Melbourne moÅ¼e byÄ‡ o taki sukces niezwykle ciÄ™Å¼ko.\r\n\r\n- Szczerze mÃ³wiÄ…c, myÅ›lÄ™, Å¼e inne druÅ¼yny rÃ³wnieÅ¼ poczyniÅ‚y powaÅ¼ne kroki do przodu. MÃ³wiÄ™ tutaj o Force India, Haasie i przede wszystkim Renault. Williams natomiast wrÄ™cz fruwa. Tak wiÄ™c szykuje siÄ™ bardzo zaciÄ™ta walka o piÄ…te miejsce w klasyfikacji zespoÅ‚Ã³w, a wejÅ›cie do Q3 w Australii bÄ™dzie bardzo trudne - zaznaczyÅ‚ mÅ‚ody zawodnik.\r\n\r\nNa pytanie, czy Williams jest obecnie czwartÄ… siÅ‚Ä… w stawce krÃ³lowej sportÃ³w motorowych, 22-latek nie odpowiedziaÅ‚ jednoznacznie, choÄ‡ zaznaczyÅ‚, Å¼e brytyjska ekipa wydaje siÄ™ naprawdÄ™ niesamowicie silna. - Nie wiem, jak jest, bo chyba jeszcze trochÄ™ za wczeÅ›nie, aby stwierdziÄ‡, gdzie siÄ™ znajdujÄ…, ale na pewno sÄ… bardzo mocni i bÄ™dzie ciÄ™Å¼ko ich pokonaÄ‡ - oceniÅ‚ reprezentant Toro Rosso.\r\n\r\n- DziÄ™ki ostatniemu dniu testÃ³w moÅ¼emy byÄ‡ nieco bardziej optymistyczni i pozytywnie nastawieni do nowego sezonu - podkreÅ›liÅ‚ Sainz, ktÃ³ry w piÄ…tkowej odsÅ‚onie zajÄ™Ä‡ pod BarcelonÄ… uzyskaÅ‚ znakomity trzeci czas. - CaÅ‚y czas mamy mniej przejechanych okrÄ…Å¼eÅ„ niÅ¼ nasi rywale i posiadamy spory potencjaÅ‚ do uwolnienia z naszego bolidu. Nadrobimy to w trakcie mistrzostw - zakoÅ„czyÅ‚ syn byÅ‚ego dwukrotnego rajdowego mistrza Å›wiata.', 'https://ocdn.eu/pulscms-transforms/1/IoIktkqTURBXy8wNjFiZWJiYmUyYTVlNWM5M2ViMGU2MDFjZDAyMDI4Ni5qcGVnk5UDAM0BQs0MA80GwZMFzQMUzQG8lQfZMi9wdWxzY21zL01EQV8vMTQwYjFjZmU3ZjBhYzUyZWRjMDEwZDcwOTc4ZTg0YmUucG5nAMIA', '6', 'publish', '2017-03-12 01:57:55', 'admin'),
(37, 'Kimi Raikkonen: mogliÅ›my byÄ‡ jeszcze szybsi', 'Kimi Raikkonen z zespoÅ‚u Ferrari, po zakoÅ„czeniu ostatniego dnia zimowych testÃ³w FormuÅ‚y 1 przyznaÅ‚, Å¼e mÃ³gÅ‚ pojechaÄ‡ jeszcze szybciej. Przypomnijmy, Å¼e 37-latek uzyskaÅ‚ pierwszy czas, ktÃ³ry jednoczeÅ›nie okazaÅ‚ siÄ™ najlepszym rezultatem tegorocznych zajÄ™Ä‡ pod BarcelonÄ….\r\n\r\nWÅ‚oska stajnia od poczÄ…tku przygotowaÅ„ do nowego sezonu imponuje tempem i wydaje siÄ™ obecnie jedynym teamem, ktÃ³ry moÅ¼e postawiÄ‡ siÄ™ Mercedesowi. W finaÅ‚owej odsÅ‚onie testÃ³w, Fin korzystajÄ…cy z super-miÄ™kkiego ogumienia Pirelli uzyskaÅ‚ wynik rÃ³wny 1.18,634, bÄ™dÄ…c jedynym kierowcÄ… w stawce, ktÃ³ry zdoÅ‚aÅ‚ na torze Catalunya zejÅ›Ä‡ z czasem poniÅ¼ej 1 minuty i 19 sekund. Pomimo tego, â€žIcemanâ€ przekonywaÅ‚, Å¼e mÃ³gÅ‚ byÄ‡ jeszcze szybszy.\r\n\r\n- JeÅ¼eli byÅ›my chcieli, to mogliÅ›my pojechaÄ‡ szybciej, ale to nie byÅ‚ cel testu. OczywiÅ›cie, prÃ³bowaÅ‚em byÄ‡ tak szybki, jak to tylko moÅ¼liwe, mimo tego, na co siÄ™ zdecydowaliÅ›my. CaÅ‚y czas mamy jednak sporo rzeczy, ktÃ³re musimy poprawiÄ‡, ale wÅ‚aÅ›nie od tego sÄ… te zajÄ™cia. MoÅ¼emy byÄ‡ bardzo zadowoleni z tego, jak w sesji przedpoÅ‚udniowej spisaÅ‚ siÄ™ nasz bolid. To byÅ‚ jeden z lepszych dni, jakie mieliÅ›my przez ostatnie dwa tygodnie - oceniÅ‚ Raikkonen.\r\n\r\n- Tak czy siak, to dopiero poczÄ…tek. Do tej pory wszystko wyglÄ…da w porzÄ…dku, ale zobaczymy co siÄ™ stanie, gdy rozpocznie siÄ™ sezon. SamochÃ³d prowadzi siÄ™ caÅ‚kiem dobrze i to uczucie towarzyszy nam juÅ¼ od pierwszego dnia testÃ³w. ZespÃ³Å‚ wykonaÅ‚ w zimie dobrÄ… pracÄ™ i przygotowaÅ‚ maszynÄ™, ktÃ³ra wydaje siÄ™ niezawodna - dodaÅ‚ byÅ‚y mistrz Å›wiata F1.', 'https://ocdn.eu/pulscms-transforms/1/i1IktkqTURBXy85ZjlhOTcwZDdlOTdkNTk1MGU5Y2IzOGQ5ODAwOTIzZi5qcGVnk5UDAHzNEJjNCVWTBc0DFM0BvJUH2TIvcHVsc2Ntcy9NREFfLzE0MGIxY2ZlN2YwYWM1MmVkYzAxMGQ3MDk3OGU4NGJlLnBuZwDCAA', '6', 'publish', '2017-03-12 01:58:23', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role` text CHARACTER SET latin1 NOT NULL,
  `user_f_name` text CHARACTER SET latin1 NOT NULL,
  `user_l_name` text CHARACTER SET latin1 NOT NULL,
  `user_email` text COLLATE utf8_polish_ci NOT NULL,
  `user_password` text COLLATE utf8_polish_ci NOT NULL,
  `user_gender` text CHARACTER SET latin1 NOT NULL,
  `user_marital_status` text CHARACTER SET latin1 NOT NULL,
  `user_phone_no` text CHARACTER SET latin1 NOT NULL,
  `user_designation` text CHARACTER SET latin1 NOT NULL,
  `user_website` text CHARACTER SET latin1 NOT NULL,
  `user_address` text CHARACTER SET latin1 NOT NULL,
  `user_about_me` text CHARACTER SET latin1 NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `role`, `user_f_name`, `user_l_name`, `user_email`, `user_password`, `user_gender`, `user_marital_status`, `user_phone_no`, `user_designation`, `user_website`, `user_address`, `user_about_me`, `user_date`) VALUES
(3, 'admin', 'Hubert', 'Poros', 'admin', 'haslo', 'male', 'single', '505945872', 'Witam', 'www.hubert.poros.pl', 'Busko', 'asdasda', '2017-03-12 13:25:39');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
