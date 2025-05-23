-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2025 at 11:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `installatiebedrijf`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `message`, `timestamp`) VALUES
(11, 'Verhalen zijn een onmiskenbaar en krachtig element in de menselijke ervaring. Ze zijn de draden die de structuur van samenlevingen weven, de mechanismen die cultuur en geschiedenis doorgeven, en de kracht die ons in staat stelt de wereld om ons heen te begrijpen. Of het nu gaat om de verhalen die we als kinderen horen, de films die we als volwassenen kijken, of de verhalen die we onszelf vertellen om door moeilijke tijden heen te komen, verhalen hebben de unieke kracht om ons te verbinden, ons te onderwijzen en ons te inspireren.\r\n\r\nDe oorsprong van verhalen\r\nDe oorsprong van verhalen gaat duizenden jaren terug in de menselijke geschiedenis. Het vertellen van verhalen is een van de oudste tradities in de menselijke cultuur, al lang voordat geschreven taal bestond. In de vroege dagen van de mensheid werden verhalen mondeling doorgegeven van generatie op generatie. Deze verhalen waren vaak mythen, legendes of fabels die niet alleen bedoeld waren om entertainment te bieden, maar ook om belangrijke lessen over het leven, de natuur en het menselijk gedrag te onderwijzen.\r\n\r\nDe eerste verhalen waren meestal gebaseerd op de ervaringen van de gemeenschap en hadden vaak een symbolische betekenis. De oude Grieken bijvoorbeeld vertelden verhalen over goden en helden, waarvan de boodschap vaak diepere waarheden over menselijke deugden en ondeugden bevatte. Deze verhalen werden doorgegeven in de vorm van epische gedichten, zoals de Ilias en de Odyssee, die het culturele en morele fundament van de Griekse samenleving vormden.\r\n\r\nIn andere delen van de wereld waren er vergelijkbare tradities van verhalen vertellen. De inheemse culturen van Noord-Amerika, bijvoorbeeld, hebben een rijke traditie van mondelinge verhalen die de geschiedenis van hun volkeren, hun verbondenheid met de natuur en de spirituele wereld, en de waarden die zij belangrijk achten, vastlegden. In veel gevallen werden deze verhalen verteld door sjamanen of wijzen, die als tussenpersonen tussen de mens en het hogere rijk fungeerden.\r\n\r\nDe kracht van verhalen in de moderne tijd\r\nHoewel het vertellen van verhalen in de moderne tijd zijn oorspronkelijke vorm heeft verloren, is het nog steeds een krachtig hulpmiddel voor communicatie, educatie en zelfexpressie. In de hedendaagse wereld vinden we verhalen niet alleen in boeken en mondelinge vertellingen, maar ook in films, tv-shows, muziek, sociale media en zelfs in de manier waarop we ons dagelijks leven documenteren via foto&#039;s en video’s.\r\n\r\nDe kracht van verhalen ligt in hun vermogen om emoties te wekken en ons te verbinden met de ervaring van anderen. Een goed verhaal heeft de kracht om ons in de huid van de verteller te laten kruipen, ons te laten voelen wat zij voelen, en ons te laten zien hoe de wereld eruit ziet vanuit hun perspectief. Dit vermogen om empathie te creëren is de reden waarom verhalen zo effectief zijn in het overbrengen van boodschappen, het beïnvloeden van de meningen van mensen en het inspireren van actie.\r\n\r\nNeem bijvoorbeeld de wereld van films en tv-shows. De filmindustrie heeft in de loop der jaren talloze verhalen geproduceerd die niet alleen miljoenen mensen hebben vermaakt, maar ook belangrijke sociale kwesties aan de kaak hebben gesteld. Films zoals Schindler&#039;s List, 12 Years a Slave en The Pursuit of Happyness tonen de kracht van verhalen in het belichten van historische onrechtvaardigheid en het overbrengen van belangrijke lessen over veerkracht, gerechtigheid en menselijke waardigheid. Deze films hebben niet alleen bijgedragen aan het publieke bewustzijn over bepaalde kwesties, maar ze hebben ook een wereldwijd gesprek op gang gebracht over de manieren waarop we als samenleving met deze kwesties omgaan.\r\n\r\nDaarnaast is er de wereld van sociale media, waar verhalen zich op nieuwe manieren manifesteren. Platforms zoals Instagram, TikTok en YouTube bieden individuen de kans om hun persoonlijke verhalen te delen, hun ervaringen vast te leggen en een breder publiek te bereiken. Wat begon als een manier om persoonlijke momenten te delen, is uitgegroeid tot een krachtig hulpmiddel voor sociale en politieke verandering. Activisten gebruiken sociale media om verhalen van onrechtvaardigheid en onderdrukking te verspreiden, terwijl influencers en creators op hun beurt verhalen vertellen die anderen kunnen inspireren, motiveren en onderwijzen.\r\n\r\nVerhalen als hulpmiddel voor verandering\r\nEen van de meest opvallende aspecten van verhalen is hun vermogen om verandering teweeg te brengen. Verhalen hebben de kracht om paradigma’s te verschuiven, overtuigingen te veranderen en zelfs beleid te beïnvloeden. Dit is vooral duidelijk geworden in de afgelopen decennia, waarin sociale bewegingen zoals Black Lives Matter, #MeToo en LGBTQ+-rechtenbewegingen vaak verhalen gebruiken als een krachtig middel om hun boodschap over te brengen.\r\n\r\nDe #MeToo-beweging, bijvoorbeeld, heeft de verhalen van vrouwen over seksuele intimidatie en geweld naar de voorgrond gebracht. Door persoonlijke verhalen te delen, konden vrouwen wereldwijd hun ervaringen uiten en elkaar ondersteunen in een gezamenlijke strijd tegen de systemische onderdrukking waarmee ze geconfronteerd werden. Deze verhalen maakten het voor anderen mogelijk om zich met elkaar te verbinden, hen te overtuigen van de ernst van het probleem en beleidsmakers onder druk te zetten om verandering teweeg te brengen.\r\n\r\nVerhalen hebben ook de kracht om mensen bewust te maken van de ervaringen van anderen en ons te helpen een breder perspectief te ontwikkelen. Door de verhalen van mensen uit verschillende culturele, sociale en economische achtergronden te horen, kunnen we onze eigen vooroordelen en aannames ter discussie stellen en onze visie op de wereld verruimen. Dit geldt voor de manier waarop we omgaan met mensen van andere rassen, religies, geslachten of seksuele oriëntaties, maar ook voor hoe we nadenken over belangrijke kwesties zoals klimaatverandering, economische ongelijkheid en mensenrechten.\r\n\r\nDe toekomst van verhalen\r\nDe toekomst van verhalen ziet er veelbelovend uit, vooral nu de technologie zich blijft ontwikkelen. Virtual reality (VR) en augmented reality (AR) bieden nieuwe mogelijkheden voor storytelling, waardoor we verhalen op manieren kunnen ervaren die voorheen niet mogelijk waren. In plaats van simpelweg een verhaal te lezen of te bekijken, kunnen we er volledig in ondergedompeld worden. We kunnen de karakters ontmoeten, de locaties verkennen en zelfs invloed uitoefenen op de richting die het verhaal neemt. Deze interactieve vormen van storytelling kunnen niet alleen het entertainment verbeteren, maar ook educatieve ervaringen verrijken, door gebruikers in staat te stellen geschiedenis, wetenschap en cultuur op een diepere en meer persoonlijke manier te ervaren.\r\n\r\nAI-technologie biedt ook nieuwe manieren om verhalen te genereren. Terwijl traditionele verhalen vaak door mensen werden geschreven, kan kunstmatige intelligentie nu helpen bij het creëren van verhalen die niet alleen effectief en boeiend zijn, maar ook gepersonaliseerd. AI kan bijvoorbeeld gegevens verzamelen over de voorkeuren van een individu en op basis daarvan een verhaal genereren dat specifiek is afgestemd op hun interesses en emoties. Dit opent de deur naar een nieuwe vorm van storytelling, waarbij verhalen niet alleen een universele ervaring zijn, maar ook iets dat kan worden aangepast aan de unieke behoeften en verlangens van het publiek.\r\n\r\nConclusie\r\nVerhalen zijn de ruggengraat van de menselijke ervaring. Ze verbinden ons met elkaar, onderwijzen ons over de wereld en inspireren ons tot actie. Of het nu gaat om de oude mythen van de Grieken, de hedendaagse verhalen op sociale media, of de kracht van een goed geschreven roman, verhalen blijven een essentieel hulpmiddel voor de communicatie van ideeën en waarden. In de toekomst zullen nieuwe technologieën de manieren waarop we verhalen ervaren en delen verder veranderen, maar de kracht van verhalen om de menselijke geest te beïnvloeden en de wereld te veranderen, zal altijd hetzelfde blijven.\r\n\r\nDeze tekst is een voorbeeld van hoe je een onderwerp op een diepgaande manier kunt onderzoeken. Het bevat een inleiding, een aantal hoofdthema’s en een afsluitende conclusie.', '2025-04-15 08:41:38'),
(12, 'hjkldb', '2025-04-15 15:45:28'),
(13, 'g', '2025-04-15 16:22:42'),
(14, 'g', '2025-04-15 16:23:20'),
(15, 'h', '2025-04-16 07:43:57'),
(16, 'g', '2025-04-16 07:55:08'),
(17, 'f', '2025-04-29 07:36:26'),
(18, 'f', '2025-04-29 07:38:32'),
(19, 'f', '2025-04-29 07:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`) VALUES
(4, 'bad_1.jpg'),
(9, 'vloerverwarming_2.jpg'),
(10, 'dak_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Elektro', 'Van het aanleggen van stopcontacten en verlichting tot het installeren van complete groepenkasten of uitbreiding bestaande installatie kunt u terecht bij Installatiebedrijf Stassen. \nInstallatiebedrijf Stassen is <strong>een REI erkend elektrotechnisch installateur.</strong>\n<br>\nU kunt ons opzoeken op <a href=\"https://www.echteinstallateur.nl\"> www.echteinstallateur.nl </a> hier staan uitsluitend installatiebedrijven of adviseurs die over de juiste kennis en kunde beschikken op hun vakgebied. Het bewijs is een erkenning van InstallQ. \n<br>\nErkende of gecertificeerde installatiebedrijven/adviseurs:\n&#8226; Zijn bekend met wet- en regelgevingen op hun vakgebied. Richtlijnen en regels weten zij goed en veilig toe te passen in de praktijk\n&#8226; Kunnen rechtsgeldige documenten leveren (maatwerkadvies / voor verzekeraars)\n&#8226; Geven een bepaalde zekerheid in onder meer de kwaliteit van het aanleggen, het vervangen of het onderhoud van installaties\n&#8226; Worden getoetst en regelmatig gecontroleerd door InstallQ, inspecteurs of door certificerende instellingen\n<br>\nOok is installatiebedrijf Stassen een Enexis erkend <strong>zegelrecht</strong> houder. Dit houdt in dat wij bij een storing het zegel mogen verbreken en na reparatie de hoofdzekeringenkast opnieuw mogen voorzien van een nieuw zegel (rotoseal) met een uniek nummer.\n<br>\n<i>Wij zijn breed inzetbaar en kunnen alle denkbare projecten op het gebied van elektro voor u uitvoeren!</i>\n<br>\nU kunt bij ons terecht o.a. voor advies, ontwerp, aanleg en onderhoud van uw nieuwbouw, renovatie en utiliteitsproject.\nOok voor storingen kunt u bij ons terecht.\n', 'elektro.jpg'),
(2, 'Gas', 'Een betrouwbare gasinstallatie is essentieel voor uw veiligheid. \nInstallatiebedrijf Stassen is <strong>een REG erkend gastechnisch installateur.</strong>\n<br>\nU kunt ons opzoeken op <a href=\"https://www.echteinstallateur.nl\"> www.echteinstallateur.nl </a> hier staan uitsluitend installatiebedrijven of adviseurs die over de juiste kennis en kunde beschikken op hun vakgebied. Het bewijs is een erkenning van InstallQ. \n<br>\nErkende of gecertificeerde installatiebedrijven/adviseurs:\n&#8226; Zijn bekend met wet- en regelgevingen op hun vakgebied. Richtlijnen en regels weten zij goed en veilig toe te passen in de praktijk\n&#8226; Kunnen rechtsgeldige documenten leveren (maatwerkadvies/ voor verzekeraars)\n&#8226; Geven een bepaalde zekerheid in onder meer de kwaliteit van het aanleggen, het vervangen of het onderhoud van installaties\n&#8226; Worden getoetst en regelmatig gecontroleerd door InstallQ, inspecteurs of door certificerende instellingen\n<br>\n<i>Wij zijn breed inzetbaar en kunnen alle denkbare projecten op het gebied van gas voor u uitvoeren!</i>\n<br>\nU kunt bij ons terecht o.a. voor advies, ontwerp, aanleg en onderhoud van uw nieuwbouw, renovatie en utiliteitsproject.\nOok voor storingen kunt u bij ons terecht.\n \n', ''),
(3, 'Water', 'Of het nu gaat om de complete waterleiding in een woning, de aansluiting van een kraan of de aanleg van een nieuwe badkamer of keuken.\nInstallatiebedrijf Stassen heeft jarenlange ervaring met het aanleggen van water en riolering. \n<br>Ook bij lekkages of vernieuwing van oude leidingen helpen wij u snel en vakkundig.\n', ''),
(4, 'Cv', 'Van cv-ketels en radiatoren tot vloerverwarming. Wij zorgen voor een betrouwbare en energiezuinige verwarming van uw woning of bedrijfspand. \n<br>\nWij geven eerlijk advies op maat over oplossingen die passen bij uw situatie en budget en zorgen voor een perfect functionerende installatie.\n<br>\nInstallatiebedrijf Stassen in het bezit van het <strong>InstallQ</strong>-procescertificaat, een kwaliteitsverklaring op basis van <strong>BRL 6000-25</strong>. Daarbij verklaart de certificerende organisatie (Bureau Veritas) dat het gerechtvaardigd vertrouwen bestaat dat door installatiebedrijf Stassen verrichtte werkzaamheden over het installeren, repareren, onderhouden en in bedrijf stellen van gasverbrandingstoestellen en individuele verbrandingsluchttoevoer- en rookgasafvoervoorzieningen zijn uitgevoerd overeenkomstig de eisen van de BRL6000-25. Het certificaat is opgenomen in het register van de Toelatingsorganisatie Kwaliteitsborging Bouw op de website <a href=\"https://www.tlokb.nl\"> www.tlokb.nl</a>.\n<br>\nHet certificaat is opgenomen in het overzicht van de website op <a href=\"https://www.InstallQ.nl\">www.InstallQ.nl</a>.\n\n\n', ''),
(5, 'Sanitair', 'Of het nu gaat om een complete badkamer, een apart toilet of de aansluiting van een keuken. Wij verzorgen de volledige installatie van uw sanitair. Van het aanleggen van leidingen en afvoeren tot het monteren van kranen, toiletten, douches en badmeubels: alles wordt vakkundig en netjes afgewerkt. \n<br>\nWij denken ook graag met u mee over de indeling, mogelijkheden en materiaalkeuzes, zodat u verzekerd bent van een functionele en stijlvolle ruimte en leveren een strak en professioneel eindresultaat. \n<br>\nVoor zowel nieuwbouw als renovaties verzorgen wij het volledige sanitair. \n', ''),
(6, 'Luchtebehandeling', 'Een gezond binnenklimaat begint bij goede ventilatie. Wij installeren en onderhouden mechanische ventilatie, WTW-systemen en andere oplossingen voor luchtverversing. Zo voorkomt u vochtproblemen, schimmel en slechte luchtkwaliteit in huis of kantoor.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
