-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jul-2025 às 06:57
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_imobiliaria`
--
CREATE DATABASE IF NOT EXISTS `bd_imobiliaria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_imobiliaria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imobiliaria`
--

CREATE TABLE `imobiliaria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `tamanho` varchar(30) DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imobiliaria`
--

INSERT INTO `imobiliaria` (`id`, `titulo`, `descricao`, `endereco`, `cidade`, `preco`, `tipo`, `status`, `data_cadastro`, `tamanho`, `foto`) VALUES
(1, 'Casa Moderna com Piscina', 'Casa espaçosa com área gourmet, 3 quartos e piscina.', 'Rua dos Limoeiros, 45', 'São Paulo - SP', 780000.00, 'Casa', 'disponivel', '2016-03-15', '250m', 'https://img.olx.com.br/images/99/992586133889080.jpg'),
(2, 'Apartamento Compacto', 'Apartamento de 1 quarto ideal para solteiros ou estudantes.', 'Av. da Liberdade, 321', 'Curitiba - PR', 230000.00, 'Apartamento', 'disponivel', '2017-07-08', '45m', 'https://cdnm.westwing.com.br/glossary/uploads/br/2015/09/03131603/apartamento-pequeno-com-piso-de-madeira-sof%C3%A1-azul-cozinha-integrada-com-sala-e-arm%C3%A1rios-de-mdf-brancos_pexels_c-a1968.jpg'),
(3, 'Terreno Residencial', 'Terreno murado pronto para construir em bairro tranquilo.', 'Rua João XXIII, 100', 'Campinas - SP', 190000.00, 'Terreno', 'disponivel', '2018-11-22', '300m', 'https://resizedimgs.vivareal.com/fit-in/614x297/named.images.sp/7277028ad9d7dd67275d3515a7aa1d79/loteterreno-a-venda-362m-no-bonfim-paulista-ribeirao-preto.webp'),
(4, 'Sala Comercial em Prédio Novo', 'Sala no centro financeiro, pronta para escritório.', 'Av. das Empresas, 500', 'Belo Horizonte - MG', 320000.00, 'Comercial', 'disponivel', '2019-01-10', '50m', 'https://www.arbix.com.br/foto_/2023/6921/americana_comercial_salacomercialemcondominio_centro_05-06-2023_14-41-14_12.jpeg'),
(5, 'Cobertura de Luxo', 'Cobertura duplex com vista para o mar e piscina privativa.', 'Rua Atlântica, 999', 'Rio de Janeiro - RJ', 1950000.00, 'Apartamento', 'vendido', '2020-05-05', '350m', 'https://swellconstrucoes.com.br/wp-content/uploads/2022/09/Cobertura-duplex-1-1920x800-1.jpg'),
(6, 'Casa Térrea em Condomínio', '3 suítes, churrasqueira, condomínio fechado com segurança.', 'Alameda das Árvores, 88', 'Sorocaba - SP', 650000.00, 'Casa', 'disponivel', '2021-09-14', '180m', 'https://i.ytimg.com/vi/uJaoIU3Azmw/sddefault.jpg'),
(7, 'Loja em Centro Comercial', 'Ponto excelente para comércio em shopping local.', 'Av. das Nações, 200', 'Joinville - SC', 580000.00, 'Comercial', 'alugado', '2022-02-28', '60m', 'https://cdn.imoview.com.br/francisco/Imoveis/48093/jpcr-5.jpg?1662405684'),
(8, 'Apartamento Garden com Quintal', 'Apartamento térreo com jardim exclusivo.', 'Rua Primavera, 12', 'Porto Alegre - RS', 410000.00, 'Apartamento', 'disponivel', '2023-04-17', '95m', 'https://extra.globo.com/incoming/25283196-774-24e/w976h550-PROP/extragardens-abredivulgacao-cvtv.jpg'),
(9, 'Terreno Comercial Esquina', 'Localização privilegiada para empresa ou franquia.', 'Rodovia SP-101, Km 22', 'Campinas - SP', 750000.00, 'Terreno', 'disponivel', '2024-08-01', '700m', 'https://static.arboimoveis.com.br/TE0378_HERMES/640x480/unnamed-51687006061562.jpg'),
(10, 'Casa de Campo com Lareira', 'Ideal para finais de semana, natureza ao redor.', 'Estrada da Serra, Km 10', 'Campos do Jordão - SP', 880000.00, 'Casa', 'disponivel', '2025-01-30', '200m', 'https://casa.abril.com.br/wp-content/uploads/2024/07/linda-casa-montanha-lareira-cozinha-rustica-fogao-a-lenha-sabella-arquitetura-13.jpg?crop=1&resize=1212,909'),
(11, 'Casa com Jardim e Varanda Gourmet', 'Casa nova com 3 dormitórios, suíte e varanda com churrasqueira.', 'Rua das Flores, 110', 'Florianópolis - SC', 720000.00, 'Casa', 'disponivel', '2025-06-30', '160m', 'https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2024/03/29/78262652-casa-415-m-mezanino-varanda-gourmet-inspirada-chale-alemao-arkitito-arquitetura-15-jardim-area-externa.jpg'),
(12, 'Apartamento Alto Padrão', 'Apartamento de 4 quartos com sacada e área de lazer completa.', 'Av. Paulista, 987', 'São Paulo - SP', 950000.00, 'Apartamento', 'disponivel', '2025-06-30', '120m', 'https://www.incorposul.com.br/wp-content/uploads/2022/07/como-decorar-um-apartamento-de-alto-padrao.jpg'),
(13, 'Terreno Plano para Condomínio', 'Ideal para construção de condomínio fechado.', 'Rua Campos Verdes, 350', 'Valinhos - SP', 1250000.00, 'Terreno', 'disponivel', '2025-06-30', '1000m', 'https://www.cardinali.com.br/foto_/2023/110788/sao-carlos-terreno-condominio-aquarela-07-02-2023_12-17-38-0.webp'),
(14, 'Terreno Rural com Nascente', 'Área verde ampla com nascente e acesso por estrada de terra.', 'Fazenda Santa Rita, Zona Rural', 'Bragança Paulista - SP', 420000.00, 'Terreno', 'disponivel', '2025-06-30', '5000m', 'https://img.olx.com.br/images/88/886562299243198.webp'),
(15, 'Ponto Comercial no Centro', 'Loja ampla com vitrine e fluxo intenso de pedestres.', 'Rua Central, 150', 'Londrina - PR', 670000.00, 'Comercial', 'disponivel', '2025-06-30', '70m', 'https://resizedimgs.vivareal.com/fit-in/614x297/named.images.sp/a73baf884c85589558714bf84fbdddf7/ponto-comercial-para-alugar-200m-no-centro-americana.webp'),
(16, 'Galpão Industrial com Escritório', 'Galpão com 2.000m² e área administrativa integrada.', 'Rodovia BR-116, Km 45', 'Canoas - RS', 1850000.00, 'Comercial', 'disponivel', '2025-06-30', '2000m', 'https://img.olx.com.br/images/33/336481099496066.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imobiliaria`
--
ALTER TABLE `imobiliaria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imobiliaria`
--
ALTER TABLE `imobiliaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
