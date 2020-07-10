-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2019 às 23:35
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projeto`
--

CREATE DATABASE IF NOT EXISTS `db_projeto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_build`
--

CREATE TABLE `tb_build` (
  `ID_CAMPEAO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_campeao`
--

CREATE TABLE `tb_campeao` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `FOTO` varchar(25) NOT NULL,
  `DESCRIP` varchar(400) NOT NULL,
  `CUSTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_campeao`
--

INSERT INTO `tb_campeao` (`ID`, `NOME`, `FOTO`, `DESCRIP`, `CUSTO`) VALUES
(1, 'Aatrox', 'Aatrox.png', 'Brande sua espada contra o chão, causando dano em todos os inimigos próximos.', 3),
(2, 'Annie', 'Annie.png', 'Invoca seu urso de pelúcia, Tibbers, causando uma enorme explosão inicial. Tibbers então passa à auxiliar no combate, causando dano contra os inimigos.', 4),
(3, 'Ashe', 'Ashe.png', 'Ashe se concentra e passa a atirar múltiplas flechas consecutivas contra seu alvo, causando grande dano por segundo.', 4),
(4, 'Azir', 'Azir.png', 'Azir invoca seus soldados de areia, que atacam em linha reta, atingindo o alvo mais próximo, toda vez que Azir desferir um ataque básico.', 3),
(5, 'Brand', 'Brand.png', 'Brand arremessa uma enorme bola de fogo contra um inimigo. Esta bola pula nos inimigos próximos, causando dano em cada um que passa.', 4),
(6, 'Braum', 'Braum.png', 'Braum ergue seu enorme escudo contra uma direção. Interrompendo o trajeto  de qualquer disparo e reduzindo o seu dano recebido.', 2),
(7, 'Diana', 'Diana.png', 'Diana conjura um escudo flamejante ao seu redor, que à protejo contra uma quantidade de dano recebido e que causa dano à inimigos próximos.', 1),
(8, 'Dr. Mundo', 'DrMundo.png', 'Doutor Mundo cria uma nuvem tóxica ao seu redor, causando dano nos inimigos próximos e curando-se ao longo do tempo.', 3),
(9, 'Ezreal', 'Ezreal.png', 'Ezreal dispara um projétil congelante contra um inimigo próximo.', 3),
(10, 'Ivern', 'Ivern.png', 'Ivern conjura um escudo para proteger o aliado com a menor vida.', 1),
(11, 'Janna', 'Janna.png', 'Janna conjura um vendaval, que empurra todos os inimigos próximos para longe e cura os aliados dentro da área.', 4),
(12, 'Jax', 'Jax.png', 'Jax gira seu bastão no ar, desviando de todos os ataques neste período. Por fim, desfere um golpe ao seu redor que atordoa inimigos próximos.', 2),
(13, 'Kha Zix', 'Khazix.png', 'Kha Zix torna-se invisível e disfere um golpe crítico contra um inimigo, recuperando pontos de mana no processo.', 4),
(14, 'Kindred', 'Kindred.png', 'Kindred trabalha em equipe num processo de ataque e defesa. Enquanto o lobo causa dano no inimigo alvo, a ovelha salta para trás, se distanciando do mesmo.', 3),
(15, 'Kog Maw', 'KogMaw.png', 'Kog Maw cospe uma gosma ácida contra um inimigo aleatório.', 1),
(16, 'Le Blanc', 'LeBlanc.png', 'Le Blanc arremessa uma corrente mágica contra seu alvo, causando dano ao contato e atordoando-o depois de alguns segundos.', 2),
(17, 'Lux Nuvem', 'LuxCloud.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(18, 'Lux Cristal', 'LuxCrystal.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(19, 'Lux Elétrica', 'LuxElectric.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(20, 'Lux Glacial', 'LuxGlacial.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(21, 'Lux Infernal', 'LuxInferno.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(22, 'Lux Luz', 'LuxLight.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(23, 'Lux Oceano', 'LuxOcean.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(24, 'Lux Sombria', 'LuxShadow.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(25, 'Lux Aço', 'LuxSteel.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(26, 'Lux Bosque', 'LuxWoodland.png', 'Lux dispara um enorme feixe de Luz em linha reta, causando grandes quantidades de dano. Caso um inimigo seja morto, esta habilidade recupera pontos de mana.', 7),
(27, 'Malphite', 'Malphite.png', 'Malphite avança contra um inimigo aleatório, causando um terremoto na área ao seu redor, atordoando todos os inimigos próximos.', 4),
(28, 'Malzahar', 'Malzahar.png', 'Malzahar abre um portal sombrio, invocando, por ele, crias das sombras, que se juntam à luta, causando dano contra inimigos.', 2),
(29, 'Maokai', 'Maokai.png', 'Maokai recupera parte de sua vida perdida sempre que é atingido por alguma habilidade inimiga.', 1),
(30, 'Master Yi', 'MasterYi.png', 'Master Yi começa à meditar no campo de batalha, recuperando sua vida e aumentando seu dano e velocidade de ataque por um período de tempo.', 5),
(31, 'Nami', 'Nami.png', 'Nami conjura uma enorme onda que atordoa os inimigos atingidos e aumenta o dano de aliados atingidos.', 5),
(32, 'Nasus', 'Nasus.png', 'Nasus se envolve em luz, aumentando sua quantidade de vida e causando dano à inimigos próximos por um período de tempo.', 1),
(33, 'Nautilus', 'Nautilus.png', 'Nautilus conjura uma erupção do fundo do oceano que acerta o inimigo mais distante, atordoando-o.', 3),
(34, 'Neeko', 'Neeko.png', 'Neeko arremessa uma semente mágica contra um alvo aleatório, que explode três vezes, aumentando sua área de impacto no processo.', 2),
(35, 'Nocturne', 'Nocturne.png', 'Nocturne disfere um golpe circular à cada três ataques básicos. Este ataque circular causa dano em área e cura Nocturne com base no dano causado.', 3),
(36, 'Olaf', 'Olaf.png', 'Olaf fica enfurecido, tornando-se imune à atordoamentos, aumentando sua velocidade de ataque e curando-se com base no dano causado.', 4),
(37, 'Ornn', 'Ornn.png', 'Ornn solta uma baforada de trovões contra seus inimigos, aumentando a chance dos mesmos de sofrerem ataques críticos.', 1),
(38, 'Qiyana Nuvem', 'QiyanaCloud.png', 'Qiyana causa dano contra o inimigo à sua frente atordoando-o no processo.', 3),
(39, 'Qiyana Infernal', 'QiyanaInferno.png', 'Qiyana causa dano contra o inimigo à sua frente atordoando-o no processo.', 3),
(40, 'Qiyana Montanha', 'QiyanaMountain.png', 'Qiyana causa dano contra o inimigo à sua frente atordoando-o no processo.', 3),
(41, 'Qiyana Oceano', 'QiyanaOcean.png', 'Qiyana causa dano contra o inimigo à sua frente atordoando-o no processo.', 3),
(42, 'Rek Sai', 'RekSai.png', 'Rek Sai disfere uma mordida contra seu alvo, causando dano verdadeiro.', 2),
(43, 'Renekton', 'Renekton.png', 'Renekton gira sua lâmina, causando dano contra os inimigos ao seu redor e curando-se com base no dano causado.', 1),
(44, 'Singed', 'Singed.png', 'Singed solta, constantemente, uma nuvem de veneno que causa dano contínuo contra seus inimigos.', 5),
(45, 'Sion', 'Sion.png', 'Sion lança um poderoso ataque contra a área à sua frente, atordoando os inimigos atingidos pelo golpe.', 3),
(46, 'Sivir', 'Sivir.png', 'O boomerang de Sivir passa a ricochetear entre os inimigos próximos, causando dano em todos os atingidos.', 3),
(47, 'Skarner', 'Skarner.png', 'Skarner envolve-se em um escudo de cristal, que o protege contra uma quantidade de dano.', 2),
(48, 'Soraka', 'Soraka.png', 'Soraka conjura uma poça de magia, que causa dano nos inimigos atingidos e impede que os inimigos em sua área utilizem suas habilidades.', 3),
(49, 'Syndra', 'Syndra.png', 'Syndra conjura um orbe de água que causa dano na área de efeito.', 2),
(50, 'Taliyah', 'Taliyah.png', 'Taliyah manipula o terreno embaixo do inimigo com a maior quantidade de pontos de mana. Empurrando-o para longe caso seja um inimigo de ataque corpo-a-corpo e puxando-o para perto caso seja de ataque à distância.', 1),
(51, 'Taric', 'Taric.png', 'Taric conjura o poder das estrelas, tornando todos os aliados próximos imunes à qualquer fonte de dano por um período de tempo.', 5),
(52, 'Thresh', 'Thresh.png', 'Thresh lança sua lanterna na direção de um aliado, gerando um escudo de água para todos na área afetada.', 2),
(53, 'Twitch', 'Twitch.png', 'Twitch passa a atirar desenfreadamente com sua balestra, desferindo flechas mais poderosas e que atravessam seus alvos.', 4),
(54, 'Varus', 'Varus.png', 'Varus concentra-se e em seguida dispara uma enorme flecha flamejante em linha reta, que atravessa os inimigos causando dano em todos os atingidos.', 2),
(55, 'Vayne', 'Vayne.png', 'Vayne acumula marcas de luz nos inimigos os quais ataca, quando três marcas são acumuladas, elas explodem causando dano com base na vida do alvo.', 1),
(56, 'Veigar', 'Veigar.png', 'Veigar dispara uma enorme esfera de energia sombria contra um alvo aleatório. Caso veigar esteja em um nível superior à este alvo, o mesmo é morto instantaneamente.', 3),
(57, 'Vladimir', 'Vladimir.png', 'Vladimir drena a energia vital de seu alvo, causando dano no mesmo enquanto recupera seus pontos de vida.', 1),
(58, 'Volibear', 'Volibear.png', 'Volibear morde seu alvo, causando grande quantidade de dano. Se a vida do alvo for inferior à 35% de seu total, esta mordida o mata instantaneamente e Volibear recupera seus pontos de mana.', 3),
(59, 'Warwick', 'Warwick.png', 'Warwick salta enfurecido na direção do alvo com menor vida. Ao alcança-lo, desferi múltiplos golpes contra o mesmo. O alvo fica atordoado durante este processo, e Warwick recupera sua vida com base em seu dano.', 1),
(60, 'Yasuo', 'Yasuo.png', 'Yasuo salta contra o inimigo que possuir a maior quantidade de itens, lançando-o ao ar e desferindo múltiplos golpes com sua espada. Durante este processo o inimigo permanece atordoado.', 2),
(61, 'Yorick', 'Yorick.png', 'Yorick abençoa os aliados com a menor quantidade de vida, fanzendo com que, quando morrerem, voltem dos mortos como crias de luz.', 4),
(62, 'Zed', 'Zed.png', 'Zed invoca um clone da tempestade, que herda seus pontos de vida e seus itens equipados. O clone de tempestade também pode invocar outros clones da tempestade.', 5),
(63, 'Zyra', 'Zyra.png', 'Zyra invoca plantas infernais que atacam seus inimigos. Estas plantas são inalvejáveis e desaparecem depois de um certo tempo.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clacam`
--

CREATE TABLE `tb_clacam` (
  `ID_CAMPEAO` int(11) NOT NULL,
  `ID_CLASSE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_clacam`
--

INSERT INTO `tb_clacam` (`ID_CAMPEAO`, `ID_CLASSE`) VALUES
(1, 8),
(2, 6),
(3, 10),
(4, 6),
(5, 7),
(6, 12),
(7, 2),
(8, 4),
(9, 10),
(10, 5),
(11, 9),
(12, 4),
(13, 2),
(14, 10),
(15, 11),
(16, 2),
(16, 7),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 12),
(28, 6),
(29, 5),
(30, 8),
(30, 9),
(31, 9),
(32, 12),
(33, 12),
(34, 5),
(35, 2),
(36, 4),
(37, 12),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 11),
(43, 4),
(44, 1),
(45, 4),
(46, 8),
(47, 11),
(48, 9),
(49, 7),
(50, 7),
(51, 12),
(52, 12),
(53, 10),
(54, 10),
(55, 10),
(56, 7),
(57, 7),
(58, 4),
(59, 11),
(60, 8),
(61, 6),
(62, 2),
(62, 6),
(63, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_classe`
--

CREATE TABLE `tb_classe` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `FOTO` varchar(25) NOT NULL,
  `DESCRIP` varchar(400) NOT NULL,
  `MARCA_DESCRIP` varchar(400),
  `MARCA` int(11) NOT NULL,
  `QTD_MK1` int(11) NOT NULL,
  `QTD_MK2` int(11) DEFAULT NULL,
  `QTD_MK3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_classe`
--

INSERT INTO `tb_classe` (`ID`, `NOME`, `FOTO`, `DESCRIP`, `MARCA_DESCRIP`, `MARCA`, `QTD_MK1`, `QTD_MK2`, `QTD_MK3`) VALUES
(1, 'Alquimista', 'Alquimista.png', 'Alquimistas ignoram colisões com outros personagens e nunca param de se mover', NULL, 1, 1, NULL, NULL),
(2, 'Assassino', 'Assassino.png', 'Assassinos saltam na direção dos inimigos mais distantes no início da partida e recebem aumento em suas chances de acerto crítico e em seu dano crítico.', '3 -> + 75% de dano crítico e + 10% de chance de acerto crítico.  6 -> + 150% de dano crítico e + 20% de chance de acerto crítico.', 2, 3, 6, NULL),
(3, 'Avatar', 'Avatar.png', 'O elemento de origem de um avatar é contado 2 vezes para os efeitos daquela origem.', NULL, 1, 1, NULL, NULL),
(4, 'Bezerker', 'Bezerker.png', 'Bezerkers pulam em direção ao inimigo mais próximo no início da partida e possuem chance de causar dano em área.', '3 -> 40% de chance.  6 -> 100% de chance.', 2, 3, 6, NULL),
(5, 'Druida', 'Druida.png', 'Druidas recuperam 40 pontos de vida à cada segundo.', NULL, 1, 2, NULL, NULL),
(6, 'Invocador', 'Invocador.png', 'Invocadores aumentam a vida/tempo de duração de suas invocações.', '3 -> +40% de vida/tempo.  6 -> +100% de vida/tempo.', 2, 3, 6, NULL),
(7, 'Mago', 'Mago.png', 'magos possuem uma chance de utilizarem suas habilidades 2 vezes consecutivas.', '3 -> 50% de chance.  6 -> 100% de chance.', 2, 3, 6, NULL),
(8, 'Mestre Das Lâminas', 'MestreDasLaminas.png', 'Mestres das Lâminas possuem 40% de chance de desferirem ataques adicionais.', '2 -> 1 ataque adicional.  4 -> 2 ataques adicionais.   6 -> 3 ataques adicionais.', 3, 2, 4, 6),
(9, 'Místico', 'Mistico.png', 'Místicos aumentam a resistência mágica de todos os membros do grupo.', '2 -> +40 de resistência mágica.  4 -> +120 de resistência mágica.', 2, 2, 4, NULL),
(10, 'Patrulheiro', 'Patrulheiro.png', 'A cada 3 segundos patrulheiros possuem uma chance de dobrarem suas velocidades de ataque por 3 segundos.', '2 -> 30% de chance.  4 -> 60% de chance.  6 -> 100% de chance.', 3, 2, 4, 6),
(11, 'Predador', 'Predador.png', 'Predadores executam seus alvos quando o mesmo estiver com menos que 25% de sua vida máxima.', 'NULL', 1, 3, NULL, NULL),
(12, 'Vigia', 'Vigia.png', 'Vigias possuem um grande aumento em seus pontos de armadura.', '2 -> +125% de armadura.  4 -> +275% de armadura.  6 -> +450% de armadura.', 3, 2, 4, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itembase`
--

CREATE TABLE `tb_itembase` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `DESCRIP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_itembase`
--

INSERT INTO `tb_itembase` (`ID`, `NOME`, `FOTO`, `DESCRIP`) VALUES
(1, 'Arco Recurvo', 'ArcoRecurvo.png', 'Aumenta em 15% a velocidade de ataque.'),
(2, 'Bastão Desnecessariamente Grande', 'BastaoDesnecessariamenteGrande.png', 'Aumenta em 20% o dano de habilidade.'),
(3, 'Capa Negatron', 'CapaNegatron.png', 'Garante 25 pontos de Resistência Mágica.'),
(4, 'Cinto do Gigante', 'CintoDoGigante.png', 'Garante 200 pontos de Vida.'),
(5, 'Cota de Malha', 'CotaDeMalha.png', 'Garante 20 pontos de armadura.'),
(6, 'Espada G. P. C.', 'EspadaG.p.C..png', 'Garante 15 pontos de dano de ataque.'),
(7, 'Espátula', 'Espatula.png', 'Talvez esse item faça alguma coisa...'),
(8, 'Lágrima da Deusa', 'LagrimaDaDeusa.png', 'Garate 20 pontos de Mana.'),
(9, 'Luvas do Pugilista', 'LuvasDoPugilista.png', 'Aumenta em 10% a chance de crítico e em 10% a chance de esquiva.'),
(10, 'Foice Espectral', 'FoiceEspectral.png', 'Aumenta em 15% a penetração de armadura do usuário.'),
(11, 'Abatedora', 'Abatedora.png', 'Aumenta em 5% a chance de receber um item completo nas caixas surpresa.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itemcompleto`
--

CREATE TABLE `tb_itemcompleto` (
  `ID1` int(11) NOT NULL,
  `ID2` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `FOTO` varchar(50) NOT NULL,
  `DESCRIP` varchar(300) NOT NULL,
  `TIPO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_itemcompleto`
--

INSERT INTO `tb_itemcompleto` (`ID1`, `ID2`, `NOME`, `FOTO`, `DESCRIP`, `TIPO`) VALUES
(1, 1, 'Canhão Fumegante', 'CanhaoFumegante.png', 'O alcance de ataque do usuário é dobrado.', 1),
(1, 2, 'Lâmina Furiosa de Guinsoo', 'LaminaDaFuriaDeGuinsoo.png', 'Ataques básicos acumulam, infinitamente, +4% de velocidade de ataque para o usuário.', 1),
(1, 3, 'Furacão de Runaan', 'FuracaoDeRunaan.png', 'Ataques básicos disparam uma flecha de Luz em um inimigo diferente do alvo do usuário. Esta flecha se comporta como o ataque básico do usuário.', 1),
(1, 4, 'Hidra Titânica', 'HidraTitanica.png', 'Ataques básicos passam a causar 3% da vida máxima do usuário em uma área de cone.', 1),
(1, 5, 'Dançarina Fantasma', 'DancarinaFantasma.png', 'Faz com que o usuário desvie de todos os acertos críticos.', 3),
(1, 6, 'Matador de Gigantes', 'MatadorDeGigantes.png', 'Os ataques básicos do usuário causam 5% da vida máxima do alvo como dano verdadeiro.', 1),
(1, 7, 'Espada do Rei Destruído', 'EspandaDoReiDestruido.png', 'O usuário se transforma em um Mestre das Lâminas.', 4),
(1, 8, 'Faca de Statikk', 'FacaDeStatikk.png', 'A cada 3 ataques básicos consecutivos, cause 100 de dano mágico à 3 inimigos.', 1),
(1, 9, 'Balestra de Repetição', 'BalestraDeRepeticao.png', 'Durante a partida, Balestra Repetidora salta de aliado em aliado sempre que seu usuário atual morre. Cada salto acumula +30% de chance de crítico e +30% de velocidade de ataque.', 1),
(2, 2, 'Capuz da Morte de Rabadon', 'CapuzDaMorteDeRabadon.png', 'O usuário ganha +50% de dano de habilidade.', 2),
(2, 3, 'Centelha Iônica', 'CentelhaIonica.png', 'Causa 125 de dano verdadeiro à inimigos que utilizarem suas habilidades.', 3),
(2, 4, 'Morellonomicon', 'Morellonomicon.png', 'A habilidade do usuário impede os inimigos de recuperarem vida e causam 20% da vida do alvo como dano verdadeiro ao longo de 10 segundos.', 2),
(2, 5, 'Medalhão dos Solari de Ferro', 'MedalhaoDosSolariDeFerro.png', 'Garante 300 pontos de escudo para o usuário, para 2 aliados à sua esquerda e 2 à sua direita.', 3),
(2, 6, 'Pistola Laminar Hextec', 'PistolaLaminarHextec.png', 'O usuário cura-se em 25% de todo o dano causado.', 2),
(2, 7, 'Brasa do Inferno', 'BrasasDoInferno.png', 'O usuário se transforma em um Infernal', 4),
(2, 8, 'Eco de Luden', 'EcoDeLuden.png', 'Quando o usuário utilizar sua habilidade, causa 180 de dano mágico em 3 inimigos', 2),
(2, 9, 'Manopla Adornada', 'ManoplaAdornada.png', 'A habilidade do usuário possuem chance de serem acertos críticos.', 2),
(3, 3, 'Garra do Dragão', 'GarraDoDragao.png', 'Aumenta em 50% a resistência mágica do usuário.', 3),
(3, 4, 'Zéfiro', 'Zefiro.png', 'Inimigos na posição espelhada do usuário são banidos do combate por 6 segundos no início do mesmo. Caso nenhum inimigo esteja em tal posição, o inimigo mais próximo será banido.', 3),
(3, 5, 'Quebra Espada', 'QuebraEspada.png', 'Ataques básicos do usuário possuem 33% de chance de impedir seu alvo de disparar ataques básicos por 3 segundos.', 1),
(3, 6, 'Sedenta por Sangue', 'SedentaPorSangue.png', 'Ataques básicos do usuário curam-no em 40% do dano causado.', 1),
(3, 7, 'Talismã da Luz', 'TalismaDaLuz.png', 'O usuário se transforma em um Luz.', 4),
(3, 8, 'Quietude', 'Quietude.png', 'Ataques básicos do usuário possuem 33% de chance de impedir seu alvo de disparar habilidades por 4 segundos.', 1),
(3, 9, 'Mercúrio', 'Mercurio.png', 'O usuário recebe um escudo que o protege contra atordoamentos. Este escudo é recriado 3 segundos após ser destruido.', 3),
(4, 4, 'Armadura de Warmog', 'ArmaduraDeWarmog.png', 'Regenera 6% da vida perdida à cada segundo.', 3),
(4, 5, 'Efeito Vermelho', 'EfeitoVermelho.png', 'Ataques básicos do usuário impedem o inimigo de se curar e causam 20% da vida do alvo como dano verdadeiro ao longo de 10 segundos.', 1),
(4, 6, 'Arauto de Zeke', 'ArautoDeZeke.png', 'Aumenta em 15% a velocidade de ataque do usuário, de 2 aliados à esquerda e de 2 aliados à direita', 1),
(4, 7, 'Malho Congelado', 'MalhoCongelado.png', 'O usuário se transforma em um Glacial.', 4),
(4, 8, 'Redenção', 'Redencao.png', 'Quando a vida do usuário for reduzida à 30% de seu valor máximo, cura os aliados ao redor em 2500 pontos de vida depois de 2,5 segundos de atraso.', 3),
(4, 9, 'Armadilha de Garra', 'ArmadilhaDeGarra.png', 'Em cada combate, o usuário recebe um escudo que o protege contra a primeira habilidade recebida. O inimigo que quebrar este escudo é atordoado por 4 segundos.', 3),
(5, 5, 'Armadura de Espinhos', 'ArmaduraDeEspinhos.png', 'Reflete o dano recebido de ataques básicos.', 3),
(5, 6, 'Anjo Guardião', 'AnjoGuardiao.png', 'Quando o usuário morrer, volta à vida com 500 pontos de vida.', 3),
(5, 7, 'Carapaço do Vigia', 'CarapacaDoVigia.png', 'O usuário se transforma em um Vigia.', 4),
(5, 8, 'Coração Congelado', 'CoracaoCongelado.png', 'Reduz a velocidade de ataque de inimigos próximos em 35%.', 3),
(5, 9, 'Manopla Dos Glacinatas', 'ManoplaDosGlacinatas.png', 'Quando o usuário desvia de ataques básicos, cria uma área congelante em sua volta que reduz em 35% a velocidade de ataque dos inimigos.', 3),
(6, 6, 'Lâmina Mortal', 'LaminaMortal.png', 'Cada abate ou assistência garante +15 de dano de ataque para o usuário.', 1),
(6, 7, 'Lâmina Fantasma de Youmuu', 'LaminaFantasmaDeYoumuu.png', 'O usuário se transforma em um Assassino.', 4),
(6, 8, 'Lança de Shojin', 'LancaDeShojin.png', 'Quando o usuário utilizar sua habilidade, seus ataques básicos passam a restaurar 18% de seus pontos de mana máxima.', 2),
(6, 9, 'Gume de Infinito', 'GumeDoInfinito.png', 'Aumenta em 125% o dano de acertos críticos de usuário.', 1),
(7, 7, 'Força da Natureza', 'ForcaDaNatureza.png', 'Aumenta o limite de aliados em campo em 1.', 4),
(7, 8, 'Chapéu dos Magos', 'ChapeuDosMagos.png', 'O usuário se transforma em um Mago.', 4),
(7, 9, 'Machado dos Bezerkers', 'MachadoDosBezerkers.png', 'O usuário se transforma em um Bezerker.', 4),
(8, 8, 'Abraço de Seraph', 'AbracoDeSeraph.png', 'Sempre que utilizar sua habilidade, restaure 20 pontos de mana.', 2),
(8, 9, 'Punho da Justiça', 'PunhoDaJustica.png', 'No começo de cada combate o usuário ou ganha 50% a mais de dano ou recupera 50 pontos de vida à cada ataque básico.', 1),
(9, 9, 'Luva do Ladrão', 'LuvasDoLadrao.png', 'No começo de cada combate o usuário receberá outros 2 itens aleatórios. A luva do ladrão só pode ser equipada em aliados sem itens.', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_oricam`
--

CREATE TABLE `tb_oricam` (
  `ID_CAMPEAO` int(11) NOT NULL,
  `ID_ORIGEM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_oricam`
--

INSERT INTO `tb_oricam` (`ID_CAMPEAO`, `ID_ORIGEM`) VALUES
(1, 8),
(2, 7),
(3, 3),
(4, 4),
(5, 7),
(6, 6),
(7, 7),
(8, 13),
(9, 6),
(10, 2),
(11, 10),
(12, 8),
(13, 4),
(14, 7),
(14, 12),
(15, 13),
(16, 2),
(17, 10),
(18, 3),
(19, 5),
(20, 6),
(21, 7),
(22, 8),
(23, 11),
(24, 12),
(25, 1),
(26, 2),
(27, 9),
(28, 12),
(29, 2),
(30, 12),
(31, 11),
(32, 8),
(33, 11),
(34, 2),
(35, 1),
(36, 6),
(37, 5),
(38, 10),
(39, 7),
(40, 9),
(41, 11),
(42, 1),
(43, 4),
(44, 13),
(45, 12),
(46, 4),
(47, 3),
(48, 8),
(49, 11),
(50, 9),
(51, 3),
(52, 11),
(53, 13),
(54, 7),
(55, 8),
(56, 12),
(57, 11),
(58, 5),
(58, 6),
(59, 6),
(60, 10),
(61, 8),
(62, 5),
(63, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_origem`
--

CREATE TABLE `tb_origem` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `FOTO` varchar(25) NOT NULL,
  `DESCRIP` varchar(400) NOT NULL,
  `MARCA_DESCRIP` varchar(400),
  `MARCA` int(11) NOT NULL,
  `QTD_MK1` int(11) NOT NULL,
  `QTD_MK2` int(11) DEFAULT NULL,
  `QTD_MK3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_origem`
--

INSERT INTO `tb_origem` (`ID`, `NOME`, `FOTO`, `DESCRIP`, `MARCA_DESCRIP`, `MARCA`, `QTD_MK1`, `QTD_MK2`, `QTD_MK3`) VALUES
(1, 'Aço', 'Aco.png', 'Personagens de Aço tornam-se imunes à dano durante alguns segundos quando seus pontos de vida reduzem à menos de 50%.', '2 -> 2 segundos de imunidade.  3 -> 3 segundos de imunidade.  4 -> 4 segundos de imunidade.', 3, 2, 3, 4),
(2, 'Bosque', 'Bosque.png', 'No começo de cada combate, algum personagem bosque criará uma cópia de si mesmo. Apenas um é clonado por combate.', NULL, 1, 3, NULL, NULL),
(3, 'Cristal', 'Cristal.png', 'Personagens de Cristal apenas recebem uma quantidade fixa de dano por vez.', '2 -> 100 de dano máximo por vez.  4 -> 60 de dano máximo por vez.', 2, 2, 4, NULL),
(4, 'Deserto', 'Deserto.png', 'Personagens do deserto reduzem a armadura de seus inimigos no início do combate.', '2 -> 50% de redução de armadura.  4 -> 90% de redução de armadura.', 2, 2, 4, NULL),
(5, 'Eletrico', 'Eletrico.png', 'Personagens eletricos causam dano em área sempre que disferem um ataque crítico ou sofrem um ataque crítico.', '2 -> 70 de dano.  3 -> 250 de dano.  4 -> 500 de dano.', 3, 2, 3, 4),
(6, 'Glacial', 'Glacial.png', 'Personagens glaciais possuem chance de congelar seus inimigos ao atacarem.', '2 -> 20% de chance.  4 -> 40% de chance.  6 -> 60% de chance.', 3, 2, 4, 6),
(7, 'Inferno', 'Inferno.png', 'Personagens infernais criam um solo flamejante embaixo de seus inimigos, quando os atingem com suas habilidades, que causa dano por segundo.', '3 -> 80% de dano por segundo.  6 -> 175% de dano por segundo.  9 -> 275% de dano por segundo.', 3, 3, 6, 9),
(8, 'Luz', 'Luz.png', 'Sempre que um campeão de luz morre, outros campeões de luz ganham velocidade de ataque e recuperam 25% de sua vida máxima.', '3 -> 10% de velocidade de ataque.  6 -> 20% de velocidade de ataque.  9 -> 35% de velocidade de ataque.', 3, 3, 6, 9),
(9, 'Montanha', 'Montanha.png', 'No começo de cada combate, um aliado aleatório recebe um escudo de pedra, que o protegerá contra 1500 de dano recebido.', NULL, 1, 2, NULL, NULL),
(10, 'Nuvem', 'Nuvem.png', 'Personagens de nuvem garantem uma chance de desviar dos ataques para todos os aliados.', '2 -> 15% de chance de desviar.  3 -> 20% de chance de desviar.  4 -> 30% de chance de desviar.', 3, 2, 3, 4),
(11, 'Oceano', 'Oceano.png', 'Personagens do oceano garantem pontos de mana para seus aliados a cada 4 segundos.', '2 -> 15 pontos de mana.  4 -> 30 pontos de mana.  6 -> 50 pontos de mana.', 3, 2, 4, 6),
(12, 'Sombra', 'Sombra.png', 'Personagens da sombra recebem um aumento de dano por 5 segundos no começo de cada combate. Este aumento de dano é restaurado quando um inimigo é morto.', '2 -> 50% de aumento de dano, restaurado quando o próprio personagem elimina alguém.  4 -> 100% de aumento de dano, restaurado quando qualquer personagem das sombras elimina alguém.', 2, 2, 4, NULL),
(13, 'Veneno', 'Veneno.png', 'Os ataques dos personagens de veneno aplicam neurotoxinas em seus inimigos, aumentando o custo de suas habilidades em 50%.', NULL, 1, 3, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_build`
--
ALTER TABLE `tb_build`
  ADD PRIMARY KEY (`ID_CAMPEAO`);

--
-- Indexes for table `tb_campeao`
--
ALTER TABLE `tb_campeao`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_clacam`
--
ALTER TABLE `tb_clacam`
  ADD PRIMARY KEY (`ID_CAMPEAO`,`ID_CLASSE`),
  ADD KEY `ID_CLASSE` (`ID_CLASSE`);

--
-- Indexes for table `tb_classe`
--
ALTER TABLE `tb_classe`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_itembase`
--
ALTER TABLE `tb_itembase`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_itemcompleto`
--
ALTER TABLE `tb_itemcompleto`
  ADD PRIMARY KEY (`ID1`,`ID2`),
  ADD KEY `ID2` (`ID2`);

--
-- Indexes for table `tb_oricam`
--
ALTER TABLE `tb_oricam`
  ADD PRIMARY KEY (`ID_CAMPEAO`,`ID_ORIGEM`),
  ADD KEY `ID_ORIGEM` (`ID_ORIGEM`);

--
-- Indexes for table `tb_origem`
--
ALTER TABLE `tb_origem`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_campeao`
--
ALTER TABLE `tb_campeao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_classe`
--
ALTER TABLE `tb_classe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_itembase`
--
ALTER TABLE `tb_itembase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_origem`
--
ALTER TABLE `tb_origem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_build`
--
ALTER TABLE `tb_build`
  ADD CONSTRAINT `tb_build_ibfk_1` FOREIGN KEY (`ID_CAMPEAO`) REFERENCES `tb_campeao` (`ID`);

--
-- Limitadores para a tabela `tb_clacam`
--
ALTER TABLE `tb_clacam`
  ADD CONSTRAINT `tb_clacam_ibfk_1` FOREIGN KEY (`ID_CAMPEAO`) REFERENCES `tb_campeao` (`ID`),
  ADD CONSTRAINT `tb_clacam_ibfk_2` FOREIGN KEY (`ID_CLASSE`) REFERENCES `tb_classe` (`ID`);

--
-- Limitadores para a tabela `tb_itemcompleto`
--
ALTER TABLE `tb_itemcompleto`
  ADD CONSTRAINT `tb_itemcompleto_ibfk_1` FOREIGN KEY (`ID1`) REFERENCES `tb_itembase` (`ID`),
  ADD CONSTRAINT `tb_itemcompleto_ibfk_2` FOREIGN KEY (`ID2`) REFERENCES `tb_itembase` (`ID`);

--
-- Limitadores para a tabela `tb_oricam`
--
ALTER TABLE `tb_oricam`
  ADD CONSTRAINT `tb_oricam_ibfk_1` FOREIGN KEY (`ID_CAMPEAO`) REFERENCES `tb_campeao` (`ID`),
  ADD CONSTRAINT `tb_oricam_ibfk_2` FOREIGN KEY (`ID_ORIGEM`) REFERENCES `tb_origem` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Usuário BD
-- 

CREATE USER IF NOT EXISTS 'aluno'@'localhost' IDENTIFIED BY 'aluno';


GRANT ALL PRIVILEGES ON `db_projeto` . * TO 'aluno'@'localhost';
