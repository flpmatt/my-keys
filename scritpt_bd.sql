--
-- Database: `my_keys`
--
-- Estrutura da tabela `contas`
--
CREATE TABLE `Contas` (
  `id` int(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `dataHora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `Contas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Contas`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;
