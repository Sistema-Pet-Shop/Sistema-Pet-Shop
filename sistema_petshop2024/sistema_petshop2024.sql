-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24-Fev-2024 às 15:23
-- Versão do servidor: 5.7.12
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_petshop2024`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `idatendimento` int(11) NOT NULL,
  `data_hora_entrada` datetime NOT NULL,
  `data_hora_saida` datetime NOT NULL,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pet_idpet` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fucionario_veterinario` int(11) NOT NULL,
  `funcionario_entrada` int(11) NOT NULL,
  `funcionario_saida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento_itens`
--

CREATE TABLE `atendimento_itens` (
  `idservico` int(11) NOT NULL,
  `idatendimento` int(11) NOT NULL,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `cpf_cnpj` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_venda`
--

CREATE TABLE `compra_venda` (
  `idcompra_venda` int(11) NOT NULL,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `nro_nota` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idfornecedor` int(11) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro`
--

CREATE TABLE `financeiro` (
  `idfinanceiro` int(11) NOT NULL,
  `valor` double NOT NULL,
  `data_vencimento` datetime NOT NULL,
  `data_pagamento` datetime NOT NULL,
  `idatendimento` int(11) NOT NULL,
  `compra_venda` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `financeiro_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idfornecedor` int(11) NOT NULL,
  `nomefantasia` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `razaosocial` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `idfuncao` int(11) NOT NULL,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(11) NOT NULL,
  `funcao_idfuncao` int(11) NOT NULL,
  `data_admissao` date NOT NULL,
  `data_demissao` date NOT NULL,
  `pessoa_idpessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_funcao`
--

CREATE TABLE `funcionario_funcao` (
  `funcionario_matricula` int(11) NOT NULL,
  `funcao_idfuncao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `idorcamento` int(11) NOT NULL,
  `valor` double NOT NULL,
  `data_validade` datetime NOT NULL,
  `idatendimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `idpessoa` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `idpet` int(11) NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `raca_idraca` int(11) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `pet_tipo_idpet_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet_raca`
--

CREATE TABLE `pet_raca` (
  `idpet_raca` int(11) NOT NULL,
  `descricao` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet_tipo`
--

CREATE TABLE `pet_tipo` (
  `idpet_tipo` int(11) NOT NULL,
  `descricao` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idservico` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`idatendimento`),
  ADD KEY `pet_idpet` (`pet_idpet`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indexes for table `atendimento_itens`
--
ALTER TABLE `atendimento_itens`
  ADD KEY `idservico` (`idservico`),
  ADD KEY `idatendimento` (`idatendimento`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `compra_venda`
--
ALTER TABLE `compra_venda`
  ADD PRIMARY KEY (`idcompra_venda`),
  ADD KEY `idfornecedor` (`idfornecedor`),
  ADD KEY `cliente_idcliente` (`cliente_idcliente`);

--
-- Indexes for table `financeiro`
--
ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`idfinanceiro`),
  ADD KEY `idatendimento` (`idatendimento`),
  ADD KEY `compra_venda` (`compra_venda`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idfornecedor`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`idfuncao`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `pessoa_idpessoa` (`pessoa_idpessoa`);

--
-- Indexes for table `funcionario_funcao`
--
ALTER TABLE `funcionario_funcao`
  ADD KEY `funcionario_matricula` (`funcionario_matricula`),
  ADD KEY `funcao_idfuncao` (`funcao_idfuncao`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`idorcamento`),
  ADD KEY `idatendimento` (`idatendimento`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`idpessoa`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`idpet`),
  ADD KEY `raca_idraca` (`raca_idraca`),
  ADD KEY `cliente_idcliente` (`cliente_idcliente`),
  ADD KEY `pet_tipo_idpet_tipo` (`pet_tipo_idpet_tipo`);

--
-- Indexes for table `pet_raca`
--
ALTER TABLE `pet_raca`
  ADD PRIMARY KEY (`idpet_raca`);

--
-- Indexes for table `pet_tipo`
--
ALTER TABLE `pet_tipo`
  ADD PRIMARY KEY (`idpet_tipo`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `idatendimento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compra_venda`
--
ALTER TABLE `compra_venda`
  MODIFY `idcompra_venda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `financeiro`
--
ALTER TABLE `financeiro`
  MODIFY `idfinanceiro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcao`
--
ALTER TABLE `funcao`
  MODIFY `idfuncao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `idorcamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `idpessoa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `idpet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet_raca`
--
ALTER TABLE `pet_raca`
  MODIFY `idpet_raca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet_tipo`
--
ALTER TABLE `pet_tipo`
  MODIFY `idpet_tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `idservico` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `atendimento_ibfk_1` FOREIGN KEY (`pet_idpet`) REFERENCES `pet` (`idpet`),
  ADD CONSTRAINT `atendimento_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Limitadores para a tabela `atendimento_itens`
--
ALTER TABLE `atendimento_itens`
  ADD CONSTRAINT `atendimento_itens_ibfk_1` FOREIGN KEY (`idservico`) REFERENCES `servico` (`idservico`),
  ADD CONSTRAINT `atendimento_itens_ibfk_2` FOREIGN KEY (`idatendimento`) REFERENCES `atendimento` (`idatendimento`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`idpessoa`);

--
-- Limitadores para a tabela `compra_venda`
--
ALTER TABLE `compra_venda`
  ADD CONSTRAINT `compra_venda_ibfk_1` FOREIGN KEY (`idfornecedor`) REFERENCES `fornecedor` (`idfornecedor`),
  ADD CONSTRAINT `compra_venda_ibfk_2` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Limitadores para a tabela `financeiro`
--
ALTER TABLE `financeiro`
  ADD CONSTRAINT `financeiro_ibfk_1` FOREIGN KEY (`idatendimento`) REFERENCES `atendimento` (`idatendimento`),
  ADD CONSTRAINT `financeiro_ibfk_2` FOREIGN KEY (`compra_venda`) REFERENCES `compra_venda` (`idcompra_venda`);

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`idpessoa`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`pessoa_idpessoa`) REFERENCES `pessoa` (`idpessoa`);

--
-- Limitadores para a tabela `funcionario_funcao`
--
ALTER TABLE `funcionario_funcao`
  ADD CONSTRAINT `funcionario_funcao_ibfk_1` FOREIGN KEY (`funcionario_matricula`) REFERENCES `funcionario` (`matricula`),
  ADD CONSTRAINT `funcionario_funcao_ibfk_2` FOREIGN KEY (`funcionario_matricula`) REFERENCES `funcionario` (`matricula`),
  ADD CONSTRAINT `funcionario_funcao_ibfk_3` FOREIGN KEY (`funcao_idfuncao`) REFERENCES `funcao` (`idfuncao`);

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`idatendimento`) REFERENCES `atendimento` (`idatendimento`);

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`raca_idraca`) REFERENCES `pet_raca` (`idpet_raca`),
  ADD CONSTRAINT `pet_ibfk_2` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `pet_ibfk_3` FOREIGN KEY (`pet_tipo_idpet_tipo`) REFERENCES `pet_tipo` (`idpet_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
