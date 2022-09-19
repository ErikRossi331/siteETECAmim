-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Set-2022 às 01:42
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbetec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `calendario`
--

DROP TABLE IF EXISTS `calendario`;
CREATE TABLE IF NOT EXISTS `calendario` (
  `cod_cad` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `arquivo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_cad`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `calendario`
--

INSERT INTO `calendario` (`cod_cad`, `titulo`, `data`, `arquivo`) VALUES
(1, 'Calendário Escolar - Técnico em Enfermagem - 1º módulo', '2022-08-05', 'calendenferm1.pdf'),
(2, 'Calendário Escolar - Técnico em Enfermagem - 2º módulo Turma A, B e C', '2022-07-12', 'calendarioenfer2.pdf\r\n'),
(3, 'Calendário Escolar - Técnico em Enfermagem - 2º módulo - Turma D', '2022-07-12', 'calendenferm2d.pdf'),
(4, 'Calendário Escolar - Técnico em Enfermagem - 4º módulo', '2022-07-12', 'calendenferm4.pdf'),
(5, 'Calendário Escolar - Novotec Intercomplementar (EE Osvaldo Martins)', '2022-01-26', 'calendnovoimpl.pdf'),
(6, 'Calendário Escolar - Técnico em Meio Ambiente', '2022-01-25', 'calendmeioambiente.pdf'),
(7, 'Calendário Escolar - Técnico em Recursos Humanos - Classe Descentralizada Parapuã', '2022-01-25', 'calendrhparapua.pdf'),
(8, 'Calendário Escolar 2022 - Geral', '2022-01-21', 'calendgeral.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `cod_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracao` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenador` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mercado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem_capa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixo2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_curso`)
) ENGINE=MyISAM AUTO_INCREMENT=2823 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`cod_curso`, `nome`, `tipo`, `duracao`, `coordenador`, `mercado`, `descricao`, `eixo`, `imagem_capa`, `periodo`, `banner`, `eixo2`) VALUES
(16, 'Ensino Médio', 'Ensino Médio', '6 Semestres', 'Marcelo Aparecido Decurcio', 'Curso destinado à continuidade de estudos em nível superior e/ou técnico de nível médio.', 'O ensino médio destina-se aos candidatos que tenham concluído o ensino fundamental e compõe-se por duas partes: Base Nacional Comum e Parte Diversificada. As disciplinas da Base Nacional Comum, direcionadas para a formação geral do estudante, são as já tradicionalmente estudadas, como Língua Portuguesa e Literatura, Matemática, História, Geografia, Química, Física, Biologia, Educação Física e Artes. As disciplinas da Parte Diversificada objetivam ao desenvolvimento de capacidades e de condutas importantes na atualidade, visando à formação para o exercício da cidadania e preparação para o trabalho. O oferecimento dessas disciplinas é diferenciado nas Etecs, as quais dispõem de autonomia para optar por projetos, pelo ensino de filosofia, de sociologia e/ou espanhol. O inglês, que também integra a Parte Diversificada, é obrigatório no ensino médio.', 'Ensino Médio', 'ensinomedio.jpeg', 'Matutino', 'ensinomediobanner.jpg', 'Ensino Médio'),
(27, 'Novotec em Química', 'Ensino Médio', '6 Semestres', 'Renê Guerreiro de Souza Cintra', 'Indústrias farmacêuticas, químicas e de alimentos, instituições científicas e de pesquisa.', 'Ensino Médio com Habilitação Técnica Profissional de Técnico em Química.\r\nÉ composto por três séries anuais, com aulas em meio período (manhã). A grade curricular mescla disciplinas da base nacional comum ao Ensino Médio com componentes do Ensino Técnico.\r\nAo completar as três séries, o aluno terá concluído o Ensino Médio e obterá o diploma de Técnico, que lhe dará o direito de exercer a habilitação profissional e de prosseguir os estudos no nível da Educação Superior.\r\n\r\n ', 'Ensino Médio', 'novoquimica.jpg', 'Matutino', 'novoquimicabanner.jpg', 'Produção Industrial'),
(10, 'Novotec em Desenvolvimento de Sistemas', 'Ensino Médio', '6 Semestres', 'Simone Confortini Correia', 'Empresas e departamentos de desenvolvimento de sistemas em organizações governamentais e não governamentais, podendo também atuar como profissional autônomo.', 'Ensino Médio com Habilitação Técnica Profissional em Desenvolvimento de Sistemas\r\nÉ composto por três séries anuais, com aulas em meio período (manhã). A grade curricular mescla disciplinas da base nacional comum ao Ensino Médio com componentes do Ensino Técnico.\r\nAo completar as três séries, o aluno terá concluído o Ensino Médio e obterá o diploma de Técnico, que lhe dará o direito de exercer a habilitação profissional e de prosseguir os estudos no nível da Educação Superior.', 'Ensino Médio', 'novodes.jpg\r\n', 'Matutino', 'novodesbanner.jpg', 'Desenvolvimento Educacional e Social'),
(21, 'Novotec em Recursos Humanos', 'Ensino Médio', '6 Semestres', 'Fernanda Moreira Ferreira', 'Organizações públicas, privadas, mistas e do terceiro setor ou como autônomos e consultores.', 'Ensino Médio com Habilitação Profissional de Técnico em Recursos Humanos.\r\nÉ composto por três séries anuais, com aulas em meio período (manhã). A grade curricular mescla disciplinas da base nacional comum ao Ensino Médio com componentes do Ensino Técnico.\r\nAo completar as três séries, o aluno terá concluído o Ensino Médio e obterá o diploma de Técnico, que lhe dará o direito de exercer a habilitação profissional e de prosseguir os estudos no nível da Educação Superior.\r\n\r\n ', 'Ensino Médio', 'novorh.jpg', 'Matutino', 'novorhbanner.jpg', 'Gestão e Negócios'),
(13, 'Novotec em Administração', 'Ensino Médio', '6 Semestres', 'Elaine Uranga Clivelaro Buturi', 'Instituições públicas, privadas e do terceiro setor; profissional autônomo em consultoria e treinamentos.', 'É composto por três séries anuais, com aulas em meio período. Sua grade curricular mescla disciplinas da base nacional comum ao Ensino Médio com componentes do Ensino Técnico.\r\nAo completar as três séries, o aluno terá concluído o Ensino Médio e obterá o diploma de Técnico, que lhe dará o direito de exercer a habilitação profissional e de prosseguir os estudos no nível da Educação Superior.', 'Ensino Médio', 'novoadm.jpg', 'Matutino', 'novoadmbanner.jpg', 'Gestão e Negócios'),
(19, 'Itinerário Formativo em Linguagens', 'Ensino Médio', '6 Semestres', 'Marcelo Aparecido Decurcio', 'Curso destinado à continuidade de estudos em nível superior e/ou técnico de nível médio.', 'As aulas do Ensino Médio com ênfase em Linguagens, Ciências Humanas e Sociais são realizadas em meio período (manhã). As competências da Base Nacional Comum Curricular (BNCC) são organizadas de acordo com as especificidades do curso. Ao optar por essa modalidade, o aluno tem a oportunidade de se aprofundar em linguagem oral e escrita, exercitar capacidades intelectuais e expressivas, aprender a língua materna e idiomas estrangeiros, bem como estudar o homem do ponto de vista social, cultural e histórico. Ao concluir o Ensino Médio com ênfase em Linguagens, Ciências Humanas e Sociais o estudante poderá prosseguir estudos em nível superior preferencialmente nas áreas de: Administração, Arquitetura e Humanismo, Artes, Audiovisual, Ciências da Informação e Comunicação, Ciências Humanas e Sociais, Comércio Exterior, Comunicações, Design, Direito, Economia, Eventos, Filosofia, Fotografia, Geografia, História, Letras, Marketing, Moda, Multimídia, Pedagogia, Produção Cultural, Psicologia, Publicidade, Secretariado, Sociologia, Turismo e Hospitalidade, entre outras.', 'Ensino Médio', 'novoiti.jpeg', 'Matutino', 'novoitibanner.jpg', 'Itinerário Formativo'),
(12, 'Técnico em Enfermagem', 'Curso Técnico', '4 Semestres', 'Andréa Márcia Pinto Finote', 'Unidades básicas de saúde, hospitais, casa de repouso, escolas e clínicas.', 'O aluno aprende técnicas para auxiliar na recuperação de um paciente, assim como a prevenção de doenças, orientação para exames, entre outros procedimentos. O curso tem base na biologia, para aprender sobre o corpo humano; na matemática, para cálculos de medida para medicações; na física, para entender os riscos que o paciente corre, como a velocidade de uma batida de um veículo para entender os tipos de lesões possíveis, por exemplo; e português, para escrever corretamente no prontuário do paciente. \r\nAtuação: o técnico cumpre função assistencial ao enfermeiro, como cuidados básicos em pacientes graves, aplicação de vacina, dar um banho em um paciente, auxiliar em exames, entre outras funções. Pode atuar na área administrativa, na prevenção e pode montar ações educativas, na área de segurança do trabalho. ', 'Ambiente e Saúde', 'enfermagem.jpg', 'Noturno', 'enfermagembanner.jpg', 'Ambiente e Saúde'),
(23, 'Técnico em Meio Ambiente', 'Curso Técnico', '3 Semestres', 'Éverton Henrique Gonçales Cardoso', 'Instituições públicas, terceiro setor, empresas prestadoras de serviços na área ambiental, laboratórios e centros de pesquisa, indústrias, consultorias técnico-ambientais.', 'O Técnico em Meio Ambiente é o profissional que coleta, armazena e interpreta informações, dados e documentações ambientais. Colabora na elaboração de laudos, relatórios e estudos ambientais. Auxilia na elaboração, no acompanhamento e na execução de sistemas de gestão ambiental. Atua na organização de programas de educação ambiental, de conservação e de preservação de recursos naturais, de redução, reúso e reciclagem. Identifica as intervenções ambientais, analisa suas consequências e operacionaliza a execução de ações para preservação, conservação, otimização, minimização e remediação dos seus efeitos.', 'Ambiente e Saúde', 'meioambiente.jpeg', 'Noturno', 'meioambientebanner.jpg', 'Ambiente e Saúde'),
(22, 'Técnico em Farmácia', 'Curso Técnico', '3 Semestres', 'Renê Guerreiro de Souza Cintra', 'Drogarias, indústrias farmacêuticas, postos de medicação, hospitais, farmácia de manipulação, distribuidoras de medicamentos.', 'O Técnico em Farmácia manipula medicamentos, realiza testes de controle de qualidade, auxilia nas rotinas das farmácias, no armazenamento dos medicamentos e no controle do estoque. Orienta os pacientes sobre receitas medicas, conservação e uso correto de cada medicamento.', 'Ambiente e Saúde', 'farmacia.jpg', 'Noturno e Diurno', 'farmaciabanner.jpeg', 'Ambiente e Saúde'),
(20, 'Técnico em Recursos Humanos', 'Curso Técnico', '3 Semestres', 'Rodrigo Fernandes', 'Organizações públicas, privadas, mistas e do terceiro setor ou como autônomos e consultores.', 'Profissional que detém aptidão para intermediar as relações interpessoais e éticas de uma organização. É habilitado para trabalhar na execução das rotinas administrativas de pessoal com base na Legislação Trabalhista e Previdenciária. Auxilia no controle e avaliação de subsistemas de gerenciamento e contribui para a implementação das estratégias organizacionais. Compromete-se com o desenvolvimento humano, administra pessoal, promove ações de treinamento, identifica e sugere plano de benefícios. Descreve e classifica postos de trabalho, aplica questionários e processa informações acerca dos trabalhadores. Atua nos processos de recrutamento, seleção e integração, assessora as relações de trabalho e sistemas de avaliação de desempenho. Presta serviços de comunicação oral e escrita, liderança, motivação, formação de equipes e desenvolvimento de pessoal com empenho no crescimento simultâneo, individual e do grupo. Realiza ações empreendedoras e em processos de orientação sobre a importância da segurança no trabalho e da saúde ocupacional. Propõe relações positivas propícias para o clima organizacional e responsabilidade social aos diversos públicos.', 'Gestão e Negócios', 'rhnoite.jpg', 'Noturno', 'rhnoitebanner.jpg', 'Gestão e Negócios\r\n'),
(17, 'Técnico em Contabilidade', 'Curso Técnico', '2 Semestres', 'Éder Aparecido de Sousa', 'No setor de Contabilidade de qualquer tipo de empresa e em escritórios de Contabilidade.', 'Ajuda na preparação dos documentos necessários para a abertura ou o encerramento de uma empresa. Calcula os tributos (impostos, taxas e contribuições) que uma empresa deve pagar ao governo. Emite notas fiscais, gera boletos bancários e guias para o pagamento dos tributos. Registra os bens comprados e vendidos pela empresa. Elabora planilhas de controle de bens ou de estoque de mercadorias e produtos. Organiza e arquiva documentos. Auxilia na produção de relatórios diversos referentes às contas da empresa, ao cálculo do lucro ou prejuízo, do desempenho de vendas, das dívidas e dos demais demonstrativos de resultados.', 'Gestão e Negócios', 'contabilidade.jpg', 'Noturno', 'contabilidadebanner.jpg', 'Gestão e Negócios'),
(18, 'Técnico em Marketing', 'Curso Técnico', '3 Semestres', 'Fernanda Moreira Ferreira', 'Instituições públicas, privadas e do terceiro setor. Área Comércio. Empresas de consultoria e de forma autônoma.', 'É o profissional que colabora na elaboração do plano de marketing da empresa e no planejamento e implementação de ações de marketing pontuais. Executa tarefa de análise das vendas, preços e produtos. Operacionaliza as políticas de comunicação da empresa: fidelização de clientes, relação com fornecedores ou outras entidades. Executa o controle, estatísticas e operações de telemarketing. Operacionaliza políticas de apresentação dos produtos no ponto de venda. Participa na elaboração e na realização de estudos de mercado e interpreta e aplica a legislação da área.', 'Gestão e Negócios', 'marketing.jpg', 'Noturno', 'marketingbanner.jpg', 'Gestão e Negócios'),
(11, 'Técnico em Logística', 'Curso Técnico', '3 Semestres', 'Éder Aparecido de Sousa', 'Instituições públicas, privadas e do terceiro setor.', 'Executa e colabora na gestão dos processos de planejamento, operação e controle: de programação da produção de bens e serviços, programação de manutenção de máquinas e de equipamentos, de compras, de recebimento, de armazenamento, de estoques, de movimentação, de expedição, transporte e distribuição de materiais e produtos, utilizando tecnologia de informação. Presta atendimento aos clientes. Implementa os procedimentos de controle de custos, qualidade, segurança e higiene do trabalho no sistema logístico.', 'Gestão e Negócios', 'logistica.jpg', 'Noturno', 'logisticabanner.jpg', 'Gestão e Negócios'),
(24, 'Técnico em Administração', 'Curso Técnico', '3 Semestres', 'Éder Aparecido de Sousa', 'Empresas privadas, seja de comércio, serviço ou indústria, órgãos públicos (prefeituras, secretarias de governo, ministérios do governo federal etc.) e ONGs.', 'Trabalha em vários departamentos. No setor de compras, por exemplo, pode elaborar pedidos de compra de produtos, cadastrar fornecedores assim como conferir a entrega das mercadorias adquiridas. Na área de produção, pode fazer planilhas de controle de processos e produtos, registrando quais já foram produzidos e em qual quantidade. No departamento de vendas, também pode elaborar planilhas para acompanhar o desempenho das vendas, cadastrar clientes, preencher notas fiscais e gerar boletos bancários. No setor de Recursos Humanos, o técnico pode trabalhar calculando salários e benefícios dos funcionários e auxiliando nos processos de contratação e demissão de pessoal. Em qualquer área, pode atender clientes e fornecedores e redigir documentos, como e-mails, memorandos e atas. ', 'Gestão e Negócios', 'admnoite.jpg', 'Noturno', 'admnoitebanner.jpg', 'Gestão e Negócios'),
(26, 'Técnico em Informática para Internet', 'Curso Técnico', '3 Semestres', 'Daiane Marcela Piccolo', 'Empresas de desenvolvimento de sites ou de sistemas e empresas de marketing digital. O técnico também pode trabalhar por conta própria, como freelancer, prestando serviço a outras empresas.', 'O processo de criação de sites e o de desenvolvimento de programas que podem ser utilizados em páginas na internet. Para programar, o aluno vai estudar raciocínio lógico e linguagens de programação, que utiliza comandos para desenvolver funcionalidades e dar forma a um site. Além disso, o estudante aprenderá um pouco de design com o objetivo de tornar a página mais agradável e fácil de ser utilizada. O aluno aprenderá ainda como criar e alterar bancos de dados que vão alimentar os sites. Noções de marketing digital para a web e de empreendedorismo também serão ensinadas ao longo do curso.\r\nCria websites de acordo com as necessidades do cliente, identificando e sugerindo as melhores soluções; faz a manutenção de portais, sites e intranets; cuida da identidade visual das páginas de uma empresa; faz a customização de plataformas de conteúdo para web, como blogs e sites de comércio eletrônico; cria e realiza manutenção de bancos de dados para websites; adapta as páginas para abrigar vídeos, áudios e funções que facilitem a acessibilidade, como comandos de voz, por exemplo; trata e otimiza imagens para uso na internet; e prepara o layout de mensagens que são enviadas por e-mail (newsletter ou e-mail marketing), entre outras atividades.', 'Informação e Comunicação', 'informaticaparainternet.jpg', 'Noturno', 'infparainternetbanner.jpg', 'Informação e Comunicação'),
(29, 'Técnico em Redes de Computadores', 'Curso Técnico', '3 Semestres', 'Ricardo Fassina Maioli', 'Em qualquer empresa que necessite de instalação e manutenção de redes de computadores, especialmente as empresas de telecomunicações e telemarketing, além de órgãos públicos.', 'Conectar computadores em rede, de modo que as máquinas compartilhem recursos como arquivos, internet, contas de e-mail e impressoras. O estudante vai conhecer os sistemas operacionais utilizados pelas redes e seus padrões de comunicação e as configurações de segurança da informação. Aprenderá como controlar o tráfego de dados, fazer cópias de segurança, programar a automação de tarefas e montar o cabeamento estruturado, que conecta os computadores aos servidores e armários de telecomunicações. Conhecimentos de matemática e física serão revisados ao longo do curso para o aprendizado de cálculo com números binários, eletrônica, propagação de ondas eletromagnéticas e óticas.\r\nInstala e configura computadores e equipamentos de informática em rede. É responsável também por administrar, manter e analisar redes de computadores. O técnico instala ainda sistemas operacionais para os servidores que gerenciam as redes e configura o compartilhamento de recursos e as permissões de segurança entre as máquinas e os usuários. Além disso, o profissional monta os cabos e os armários de telecomunicações que abrigam servidores e outros equipamentos para rede; cuida da documentação, listando os dispositivos utilizados e executa projetos de implantação de redes de computadores em empresas.', 'Informação e Comunicação', 'redes.jpg', 'Noturno', 'redesbanner.jpg', 'Informação e Comunicação'),
(28, 'Técnico em Desenvolvimento de Sistemas', 'Curso Técnico', '3 Semestres', 'Daiane Marcela Piccolo', 'Empresas e departamentos de desenvolvimento de sistemas em organizações governamentais e não governamentais, podendo também atuar como profissional autônomo.', 'Analisa e projeta sistemas. Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de desenvolvimento e linguagens de programação específica. Modela, implementa e mantém bancos de dados.', 'Informação e Comunicação', 'dsnoite.jpg', 'Noturno', 'dsnoitebanner.jpg', 'Informação e Comunicação'),
(15, 'Técnico em Informática', 'Curso Técnico', '3 Semestres', 'Simone Confortini Correia', 'Instituições públicas, privadas e do terceiro setor que demandem sistemas computacionais, especialmente envolvendo programação de computadores.', 'Desenvolve e opera sistemas, aplicações e interfaces gráficas. Monta estruturas de banco de dados e codifica programas. Projeta, implanta e realiza manutenção de sistemas e aplicações. Seleciona recursos de trabalho, linguagens de programação, ferramentas e metodologias para o desenvolvimento de sistemas.', 'Informação e Comunicação', 'informatica.jpg', 'Noturno', 'informaticabanner.jpg', 'Informação e Comunicação'),
(25, 'Técnico em Química', 'Curso Técnico', '3 Semestres', 'Renê Guerreiro de Souza Cintra', 'Indústria química, setor alimentício, área agrícola, vendas e assistência técnica.', 'A matemática é utilizada para a base de cálculos. A físico-química também é uma disciplina importante no curso. O aluno aprenderá a manipular instrumentos como microscópio, balança analítica e outros equipamentos voltados a análises químicas. Outro ponto importante é o entendimento sobre a tecnologia de processos industriais, onde os alunos aprendem a transformação química e a evolução da matéria-prima até o produto final.', 'Produção Industrial', 'quimicanoite.png', 'Noturno', 'quinoitebanner.jpg', 'Produção Industrial'),
(14, 'Técnico em Açúcar e Álcool', 'Curso Técnico', '3 Semestres', 'Adriana Ferreira Barbosa', 'Usina de açúcar e álcool, área agrícola, indústrias direcionadas ao processo de produção de cachaça ou açúcar mascavo, todas as empresas da área química, vendas e assistência técnica.', 'Realiza a análise de matéria-prima na extração do caldo de cana e na centrifugação do açúcar. O profissional realiza o controle de qualidade. Pode atuar na área de cultivo da matéria-prima e com a tecnologia de subprodutos que sobram da produção do açúcar e do álcool.', 'Produção Industrial', 'acucarealcool.jpg', 'Noturno', 'acucarealcoolbanner.jpg', 'Produção Industrial'),
(30, 'Técnico em Segurança do Trabalho', 'Curso Técnico', '3 Semestres', 'Andréa Márcia Pinto Finote', 'Empresas públicas e privadas, como indústrias, hospitais, empresas comerciais, mineradoras, de construção civil e área rural.', 'Profissional que elabora e implementa políticas de saúde e de segurança do trabalho (SST). Realiza auditorias, acompanhamento e avaliação na área. Identifica variáveis de controle de doenças, de qualidade e do meio ambiente. Desenvolve ações educativas na área de saúde e segurança do trabalho. Participa de perícias e fiscalizações e atua em processos de negociação. Participa da adoção de tecnologias e de processos de trabalho. Gerencia documentação de SST. Investiga, analisa acidentes e recomenda medidas para sua prevenção e controle.', 'Segurança', 'seguranca.jpg', 'Noturno', 'segurancabanner.jpg', 'Segurança'),
(31, 'Técnico em Administração Integrado ao Ensino Médio', 'Ensino Médio', '6 Semestres', 'Elaine Uranga Clivelaro Buturi', 'Instituições públicas, privadas e do terceiro setor; profissional autônomo em consultoria e treinamentos.', 'Este curso é um modelo de integração da parte de formação geral, correspondente ao Ensino Médio, com a parte da formação profissional, do curso técnico. Foi criado para atender a demanda de alunos que passam grande parte do dia ou todo o dia na mesma escola e fazem, concomitantemente, o Ensino Médio e o Ensino Técnico, sendo que na Matriz Curricular do curso estão contemplados componentes curriculares e respectivas cargas horárias da formação geral e da profissional. O aluno concluinte do Curso Técnico em Administração Integrado ao Ensino Médio deverá estar preparado para exercer ativa e solidariamente a sua cidadania, dar prosseguimento aos seus estudos em diferentes níveis e atuar no mundo do trabalho, utilizando, para tanto, as competências construídas no curso. O Técnico em Administração é o profissional que empreende, analisa, interpreta e correlaciona de forma sistêmica os cenários sociais, políticos, econômicos e sustentáveis, respeitando tipos de mercado, as tendências culturais, os nichos e as possibilidades de integração das economias contemporâneas. Executa as funções de apoio administrativo nas várias áreas da organização elaborando documentos, acompanhando movimentação de pessoas e materiais e utilizando ferramentas da informática básica, como suporte às operações.', 'Ensino Médio', 'etim.jpg', 'Integral', 'etimbanner.jpg', 'Gestão e Negócios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `downloads`
--

DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `cod_down` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `arquivo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_down`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `downloads`
--

INSERT INTO `downloads` (`cod_down`, `titulo`, `data`, `arquivo`) VALUES
(1, 'Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/04/2022', '2022-05-10', 'provapedago.pdf'),
(2, 'Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/05/2022', '2022-05-10', 'provapedago2.pdf'),
(3, 'Deferimento e Indeferimento de inscrições e Resultado do Exame de Memorial Circ. 027/04/2022', '2022-05-10', 'deferimento.pdf'),
(4, 'Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/06/2022', '2022-05-10', 'provapedago3.pdf'),
(5, 'Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/25/2021', '2022-05-10', 'provapedago4.pdf'),
(6, 'Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/24/2021', '2022-05-10', 'provapedago5.pdf'),
(7, 'Deferimento e Indeferimento de inscrições e Resultado do Exame de Memorial Circ. 027/05/2022', '2022-05-10', 'deferimento2.pdf'),
(8, 'Aviso nº 027/10/2022 - Química Ambiental (Química)', '2022-03-30', 'quimicaambiental.pdf'),
(9, 'Aviso nº 027/08/2022 - Desenvolvimento e Design de Websites (Informática para Internet)', '2022-03-30', 'infoparainternet.pdf'),
(10, 'Aviso nº 027/07/2022 - Qualidade e Teste de Software (Desenvolvimento de Sistemas)', '2022-03-30', 'desqualidade.pdf'),
(13, 'Aviso nº 027/06/2022 - Relações Humanas no Trabalho (Enfermagem)', '2022-03-30', 'enfermagemtrabalho.pdf'),
(12, 'Aviso nº 027/09/2022 - Práticas de Departamento Pessoal (Recursos Humanos)', '2022-03-30', 'rhpraticas.pdf'),
(14, 'Aviso nº 027/05/2022 - Enfermagem Gerontológica e Geriátrica (Enfermagem)', '2022-03-30', 'enfermagemgeronto.pdf\r\n'),
(15, 'Aviso nº 027/04/2022 - Saúde Coletiva II (Enfermagem)', '2022-03-30', 'saudeenfermagem.pdf'),
(16, 'Aviso nº 027/07/2022 - Qualidade e Teste de Software (Desenvolvimento de Sistemas)', '2022-03-30', 'dsqualidade2.pdf'),
(17, 'Aviso nº 027/08/2022 - Desenvolvimento e Design de Websites (Informática para Internet)', '2022-03-30', 'ddwinfo2.pdf'),
(18, 'Aviso nº 027/01/2022 - Geografia (Ensino Médio)', '2022-02-24', 'geografia.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `cod_equi` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_equi`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`cod_equi`, `nome`, `cargo`, `descricao`, `curso2`, `curso3`) VALUES
(1, 'Paulo Sérgio Finotti', 'Diretoretec\r\n', 'Diretor da Escola Técnica Estadual Amim Jundi', '', ''),
(2, 'Lucimara Alves de Aguiar Basso', 'Coordenação Pedagógica', 'Coordenador de Orientação e Apoio Educacional', '', ''),
(3, 'Eduardo de Souza Pontes', 'Coordenação Pedagógica', 'Coordenador Pedagógico', '', ''),
(4, 'Aline Jacob Orlando Santana', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(5, 'Ana Paula Pereira da Silva', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(6, 'André Fernandes Barboza', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(7, 'Cesar Augusto Pinheiro Vitor', 'equipe administrativa', 'Auxiliar de Docente', '', ''),
(8, 'Décio Bernardineli', 'equipe administrativa', 'Auxiliar de Apoio', '', ''),
(9, 'Ester das Neves', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(10, 'Fábio José Pigossi', 'equipe administrativa', 'Assessor Técnico Administrativo II', '', ''),
(11, 'Gisele Rosa Lourenco dos Santos', 'equipe administrativa', 'Asesssor Administrativo', '', ''),
(12, 'Gustavo Sanches da Silva', 'equipe administrativa', 'Assessor Administrativo', '', ''),
(13, 'Henderson Claiton Bariani', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(14, 'Jaime Ribeiro da Silva', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(15, 'João Navarro Arias', 'equipe administrativa', 'Auxiliar de Apoio', '', ''),
(16, 'Leandro Radighieri', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(17, 'Ricardo Takashi Kawata', 'equipe administrativa', 'Analista de Suporte e Gestão - Bibliotecário', '', ''),
(18, 'Rodrigo da Silva Stecca', 'equipe administrativa', 'Diretor de Serviço - Administrativo', '', ''),
(19, 'Sérgio Roberto Octaviano', 'equipe administrativa', 'Diretor de Seviço - Acadêmico', '', ''),
(20, 'Sueli Aparecida de Souza Ponce', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(21, 'Vânia Miranda Coroquer', 'equipe administrativa', 'Agente Técnico e Administrativo', '', ''),
(22, 'Adriana Ferreira Babosa', 'coordenador', 'Técnico em Açúcar e Álcool', '', ''),
(23, 'Andréa Márcia Pinto Finote', 'coordenador', 'Técnico em Enfermagem', 'Técnico em Segurança do Trabalho\r\n', ''),
(24, 'Daiane Marcela Piccolo', 'coordenador', 'Técnico em Desenvolvimento de Sistemas', 'Técnico em Informática para Internet', ''),
(25, 'Eder Aparecido de Sousa', 'coordenador', 'Técnico em Administração', 'Técnico em Contabilidade', 'Técnico em Logística'),
(26, 'Elaine Uranga Clivelaro Buturi', 'coordenador', 'Técnico em Administração Integrado ao Médio', 'Novotec em Administração', ''),
(27, 'Éverton Henrique Gonçales Cardoso', 'coordenador', 'Técnico em Meio Ambiente', '', ''),
(28, 'Fernanda Moreira Ferreira', 'coordenador', 'Técnico em Marketing', 'Novotec em Recursos Humanos', 'Novotec em Administação (E.E. Osvaldo Martins)'),
(29, 'Marcelo Aparecido Decurcio', 'coordenador', 'Ensino Médio', 'Itinerário Formativo em Linguagens', ''),
(30, 'Renê Guerreiro de Souza Cintra', 'coordenador', 'Técnico em Farmácia', 'Técnico em Química', 'Novotec em Química'),
(31, 'Ricardo Fassina Maioli', 'coordenador', 'Técnico em Redes de Computadores', '', ''),
(32, 'Rodrigo Fernandes', 'coordenador', 'Técnico em Recursos Humanos', 'Técnico em Recursos Humanos (Parapuã)', ''),
(33, 'Simone Confortini Correia', 'coordenador', 'Técnico em Informática', 'Novotec em Desenvolvimento de Sistemas', ''),
(34, 'Juracy de Souza Lino', 'bolsa do povo', '', '', ''),
(35, 'Cintia Pereira Lima', 'limpeza', 'Auxiliar de Limpeza', '', ''),
(36, 'Luciani Miranda Tomaz', 'limpeza', 'Auxiliar de Limpeza', '', ''),
(37, 'Paulo Roberto Gonçalves da Vitória', 'limpeza', 'Auxiliar de Limpeza', '', ''),
(38, 'Roseli dos Santos Mariguela Pontes', 'limpeza', 'Auxiliar de Limpeza', '', ''),
(39, 'Vanderli Miranda Barbosa', 'limpeza', 'Auxiliar de Limpeza', '', ''),
(40, 'Adriano José Pierini', 'seguranca', 'Vigilante', '', ''),
(41, 'Alex Elias de Carvalho', 'seguranca', 'Vigilante', '', ''),
(42, 'Antonio Carlos Bueno Soares', 'seguranca', 'Vigilante', '', ''),
(43, 'Élcio Senna', 'seguranca', 'Vigilante', '', ''),
(44, 'Márcio José dos Santos', 'seguranca', 'Vigilante', '', ''),
(45, 'Stanley Emiliano Rocha', 'seguranca', 'Vigilante', '', ''),
(46, 'Vagner Antônio Muniz', 'seguranca', 'Vigilante', '', ''),
(47, 'Sérgio Roberto Octaviano', 'apm-diretorexe', '', '', ''),
(48, 'Rosiane Wolf Luz', 'apm-diretorfina', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `cod_evento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `imagem_post` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=381 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`cod_evento`, `titulo`, `descricao`, `imagem`, `data`, `imagem_post`) VALUES
(3, 'Destaque em desafio da USP', 'Etec Amim Jundi é destaque nas escolas do Centro Paula Souza em competição da USP\r\nA Etec sempre incentiva seus alunos a participarem das Olimpíadas e competições que envolvam conhecimento, sendo que no último dia 31/05 todos foram prazerosamente surpreendidos, com a notícia que a escola ficou em 2ª posição de acordo com o número absoluto de participantes na CUCo 2022, com um prêmio para a Etec de R$ 8.000,00 (oito mil reais)\r\nA Competição USP de Conhecimentos (CUCo) é um desafio criado exclusivamente para os estudantes do ensino médio da rede pública do Estado de São Paulo para incentivar o ingresso nos cursos de graduação da USP e auxiliar a melhorar o desempenho nas disciplinas que compõem o conteúdo programático dos processos seletivos de acesso ao ensino superior. A CUCo é parte do Vem pra USP!.\r\n\r\nTodos os alunos do 1º, 2º e 3º ano do ensino médio das escolas públicas do Estado de São Paulo, incluindo as Etecs, Institutos Federais e demais escolas da rede pública, podem participar. O objetivo é incentivá-los a ingressar nos cursos de graduação da USP e estimulá-los a melhorar o desempenho nas disciplinas que compõem o conteúdo programático de vestibulares.\r\n\r\nA primeira fase é online com 18 testes de múltipla escolha sobre Ciências Humanas, Ciências da Natureza, Matemática e Língua Portuguesa.\r\n\r\nParticipar da CUCo é uma oportunidade para o estudante da rede pública melhorar o desempenho nos conteúdos dos processos seletivos de acesso ao nível superior de ensino, como vestibulares.\r\n\r\nAlém do significativo prêmio que a escola recebeu também tivemos a premiação das alunas:\r\n\r\n- Manuela Martins de Lacerda – 1º Novotec de Química\r\n\r\n- Maria Eduarda Scramin Genari – 2º Itinerário\r\n\r\n- Daniella Freire da Silva – 3º Etim.\r\n\r\nA notícia foi realmente alvissareira, pois demonstra que a Etec caminha ótima sintonia com seus alunos, sempre os incentivando a participar de forma ativa de todas as competições e Olimpíadas. Vale ressaltar que a referida Competição foi capitaneada pela Professora Adriana Ferreira Barbosa, com o auxílio de todo os funcionários, professores e equipe diretiva.\r\nMais uma vez parabéns a todos pelo excelente resultado e pela brilhante conquista, destacando-se dentre as escolas do Centro Paula Souza (Etecs) em todo o Estado de São Paulo.', 'uspevento.jpg', '2022-06-20', ''),
(2, 'Trote arrecada roupas usadas', 'O Ensino Médio da Etec Amim Jundi, através de seus professores e alunos, sempre busca inovar e criar novas ações, seja na prática corriqueira da educação, seja na educação para a cidadania e ética.\r\nNeste ano, semelhante aos anos anteriores, os alunos dos 3ºs Ensino Médio (regular), Técnico Integrado ao Ensino Médio (ETIM), e Ensino Médio com Habilitação Técnica Profissional (Novotecs em Química, Desenvolvimento de Sistemas e Recursos Humanos), resolveram manter o chamado “trote solidário”. No mês de maio, dia 13, os referidos alunos marcaram um trote denominado como “brega”, onde passaram sala por sala no período da manhã e pediram a contribuição dos demais alunos para doarem roupas usadas. Tudo tinha um destacado objetivo, promover a arrecadação e a doação de roupas na Campanha do Agasalho que o próprio Município desenvolve. \r\nA ação foi planejada e elaborada pelos referidos alunos onde, como exposto, arrecadaram de forma voluntária e espontânea várias peças de roupas, aproximadamente 2.000, sendo doadas primeiramente para a comunidade interna, para a Associação Salvacão, de Osvaldo Cruz, que fará um bazar da pechincha e depois para a comunidade externa com doação para o Fundo Social de Solidariedade do Município, o qual redistribuirá para as pessoas que necessitam.\r\nAs atividades promovidas integram o projeto interdisciplinar “Um mundo, muitos mundos”, desenvolvido pela Base Comum da Etec, sempre buscando realizar ações voltadas para a comunidade, através de suas entidades assistenciais, com o objetivo de proporcionar a vivência com a diversidade.\r\nVale destacar a organização e alegria demonstradas pelos alunos, pois vivenciam cada passo, num pleno desenvolvimento das competências socioemocionais, preparando-os para serem cidadãos ativos e participativos dentro de nossa sociedade.\r\nMais uma vez parabéns a Equipe Diretiva, que sempre apoia, a todos os professores, funcionários e alunos dos 3ºs anos, pois a Etec demonstra cada vez mais que está no caminho certo, pensando sempre no futuro de seus alunos e no preparo para a vida.', 'trote.jpg', '2022-05-16', ''),
(1, 'Jogos Escolares JEESP 2022', 'A Etec Amim Jundi participou nos meses de abril e maio dos Jogos Escolares – JEESP Categoria Infantil 2022, promovidos pela Secretaria de Esporte, Lazer e Juventude do Estado de São Paulo. Tais Jogos se referem à prática de modalidades esportivas coletivas e individuais.\r\n\r\nA Etec organizou e treinou equipes de Futsal Feminino e Masculino, Voleibol Masculino e Feminino, Basquete Masculino, Handebol Feminino, Damas Masculino e Feminino, Tênis de Mesa Feminino e Masculino, Atletismo Feminino e Masculino, envolvendo um total de 105 alunos em todas as modalidades.\r\n\r\nApós as acirradas disputas entre as escolas das cidades de Osvaldo Cruz, Sagres, Salmourão e Inúbia Paulista, a Etec Amim Jundi, nesta fase sub-regional – Inspetoria de Osvaldo Cruz, obteve os seguintes resultados:\r\n\r\n- Futsal Masculino – Campeão;\r\n\r\n- Basquete Masculino – Campeão;\r\n\r\n- Damas Masculino – Campeão;\r\n\r\n- Voleibol Feminino – Vice-Campeã;\r\n\r\n- Tênis de Mesa Masculino – Vice-campeão;\r\n\r\n- Futsal Feminino – sem adversário na fase sub-regional, passando direto para outra fase;\r\n\r\n- Voleibol Masculino – sem adversário na fase sub-regional, passando direto para outra fase;\r\n\r\n- Handebol Feminino – sem adversário na fase sub-regional, passando direto para outra fase;\r\n\r\n- Damas Feminino – sem adversário na fase sub-regional, passando direto para outra fase;\r\n\r\n- Tênis de Mesa Feminino – sem adversário na fase sub-regional, passando direto para outra fase;\r\n\r\n- Atletismo ainda será disputado.\r\n\r\nA próxima fase acontecerá nos dias 09, 10 e 12 de maio na cidade de Adamantina, quando nossos times enfrentarão os times campeões das Inspetorias de Esporte de Adamantina e de Dracena.\r\n\r\nAs competições aconteceram e a participação da Etec foi esplêndida, observando-se sempre que não se trata apenas de ganhar ou perder jogos, mas de competir, de unir os atletas, os alunos, despertando neles e na escola um sentimento de amor pela Escola, vivendo os áureos tempos de esportes em nossa cidade. Vale destacar que, apesar de não ter sido permitida a entrada de torcida, nas finais houve a transmissão pela Plataforma Teams para toda a Escola, o que gerou uma grande motivação e torcida por parte de todos, sempre com o intuito de motivar os alunos e fomentar em todos o amor pela Escola.\r\n\r\nParabéns para todos os atletas, alunos e professores, em especial para a Professora Paula Rived Garcia, que muito contribuiu para o sucesso dos jogos.', 'jeesp.jpg', '2022-05-12', ''),
(4, 'Trote abril', 'O Ensino Médio da Etec Amim Jundi, através de seus professores e alunos, sempre busca inovar e criar novas ações, seja na prática corriqueira da educação, seja na educação para a cidadania e ética.\r\n\r\nNeste ano, igual a anos anteriores, os alunos dos 3ºs, resolveram manter o chamado “trote solidário”. No mês de abril os referidos alunos marcaram um trote denominado como de “fantasias – universo infantil”, contribuindo com chocolates para que pudessem arrecadar uma boa quantidade e entregarem em alguma escola municipal.\r\n\r\nAssim foi feito, porém antes também passaram sala por sala no período da manhã e pediram a contribuição dos demais alunos para comprarem mais chocolates, bem como também contaram com o apoio de todos os professores e funcionários. Tudo tinha um destacado objetivo, promover a chamada “Páscoa Solidária”.\r\n\r\nA ação foi planejada e elaborada pelos referidos alunos onde, como exposto, arrecadaram de forma voluntária e espontânea valores para depois montarem 230 (duzentas e trinta) sacolas com chocolates e outras guloseimas que foram distribuídas no dia 14 de abril, para as crianças Escola Municipal “Max Wirth”. Todas as sacolas foram entregues pelos próprios alunos dos terceiros anos, os quais fantasiados visitaram aquela Escola e divertiram todas as crianças.\r\n\r\nVale destacar que as guloseimas não foram simplesmente enviadas para o local, mas os alunos foram, fantasiados (de princesas, personagens de filmes, bailarinas e “coelhos”), entregar. A diversão foi muita, porém o aprendizado muito maior, afinal “tudo vale a pena, se alma não é pequena” e esses alunos demonstraram um sentimento maior que qualquer fantasia, pois em cada abraço dado ou recebido foi possível encontrar o amor e a carinho, na verdade houve uma completa a interação entre os adolescentes e as crianças. Numa sintonia que só poderia ser obtida nesse clima de Páscoa, de renascimento e ressurreição.\r\n\r\nAs atividades promovidas integram o projeto interdisciplinar “Um mundo, muitos mundos” desenvolvido pela Base Comum da Etec, sempre buscando realizar ações voltadas para a comunidade, através de suas entidades assistenciais, com o objetivo de proporcionar a vivência com a diversidade.\r\n\r\nMais uma vez parabéns a todos os professores, funcionários e alunos dos 3ºs anos, pois a Etec demonstra que está no caminho certo, pensando sempre no futuro de seus alunos e no preparo para a vida.', 'trote.jfif', '2022-04-19', 'trote.jfif'),
(5, 'Circuito Agro', 'Circuito de Negócios Agro do Banco do Brasil. Nesta sexta-feira, 08 de abril de 2022, os alunos do 3º ano do Técnico em Administração Integrado ao Ensino Médio – ETIM, acompanhados pela orientadora educacional, professora Lucimara Alves de Aguiar Basso, participaram de uma visita no Conjunto Esportivo Jubileu de Ouro, com apresentações de produtos, serviços, inovações tecnológicas ao setor Negócios Agro, além de uma palestra voltada ao meio Agro.  A palestra aconteceu dentro do ambiente da carreta do Banco do Brasil adaptada para atuar como Agência Móvel. O Banco do Brasil foi parceiro da Prefeitura Municipal de Osvaldo Cruz na 1º edição da Feira Osvaldo Cruz Agro.\r\n\r\n \r\n\r\nA Etec Amim Jundi integra a instituição Centro Estadual de Educação Tecnológica Paula Souza (CEETEPS) e se destaca dentre as escolas públicas de nossa região e estado, renovando a cada dia a missão da escola: “Formar profissionais competentes para o trabalho e para a vida”.', 'agro.jfif', '2022-04-11', 'agro.jfif'),
(6, 'O Julgamento de Capitu', 'A Etec Amim Jundi procura sempre inovar e trazer novas metodologias onde o aluno se torna protagonista e desenvolve com prazer as atividades que lhe são sugeridas.\r\n\r\nNo último dia 31 de março, o 2º ano do Ensino Médio com Itinerário Formativo, no componente curricular Laboratório de Processos Criativos, realizou um espetacular debate, com o tema: O julgamento de Capitu. Inicialmente os alunos foram motivados a ler a obra “Dom Casmurro”, de Machado de Assis. Após a leitura foram motivados a preparar um debate onde ocorreria o julgamento da personagem Capitu.\r\n\r\nA atividade iniciou-se com a apresentação da obra, em seguida alguns personagens desfilaram no palco trazendo suas características e peculiaridades marcantes da citada obra.\r\n\r\nO julgamento foi empolgante, envolvendo inúmeros argumentos e contra argumentos, em uma demonstração de preparo e dedicação. Houve também uma equipe de marketing que preparou divulgação digital do evento, cartazes, folders, lembrancinhas do evento.\r\n\r\nHá de se destacar ainda que houve um corpo de jurados com 11 (onze) membros, sendo ex-alunos e pai de aluno, buscando uma isenção total na hora de responder aos quesitos, que também foram preparados pelos alunos.\r\n\r\nO resultado do julgamento é a eterna pergunta trazida na imortal obra machadiana: Será que Capitu traiu Bentinho?\r\n\r\nO julgamento foi tão comentado e com resultado tão positivo que ocorrerá novamente, em outros termos, no dia 05/04/2022, agora com outras turmas para assistir e nova forma de julgar.\r\n\r\nÉ sempre muito bom ver os alunos tornarem-se protagonistas e exporem com firmeza e veemência seus argumentos e opiniões. Parabéns a todos os alunos do 2º ano do Ensino Médio com Itinerário Formativo, pois demonstram que esse é um curso de peso e importante dentro da Etec Amim Jundi.', 'capitu.jfif', '2022-04-05', 'capitu.jfif'),
(7, 'Bate-papo com ex-alunos', 'Na manhã do dia 29, realizamos um bate-papo com ex-alunos do ETIM (Ensino Técnico em Administração integrado ao Ensino Médio) de vários anos anteriores com os atuais discentes da área de Administração integrada ao Ensino Médio (Novotec de Administração e ETIM). Bruna Caroline Silva (2014 - 2016), Dafine Cristina do Carmo Ferreira (2016 - 2018), Daniel Logino de Souza Junior (2015 - 2017), João Vitor dos Santos Lopes (2015 - 2017), Maria Emilia dos Santos Lopes (2016 - 2018), Maria Fernanda de Oliveira Nunes (2016-2018) e Vitor Hugo Novais Carniato (2012 - 2014) contaram suas experiências vividas no tempo em que estudaram na Etec, como foi quando saíram da escola e como estão hoje, em relação aos estudos e vida profissional. De forma descontraída, cheia de carinho e respeito por nossa instituição, os atuais alunos puderam presenciar depoimentos repletos de aprendizado e puderam fazer perguntas sobre os desafios vividos por aqueles que já passaram por aqui. A Etec Amim Jundi agradece, se alegra e está sempre de portas abertas para receber os ex-alunos que fizeram parte de nossa história.', 'batepapo.jfif', '2022-03-31', 'batepapo.jfif'),
(8, 'Trote 2022', 'Na Etec Amim Jundi há um costume, que perdura há anos e que praticamente virou tradição, onde os alunos dos terceiros (3º) anos, espontaneamente, organizam-se e periodicamente criam alguns “trotes”, no sentido alegre, respeitoso e dinâmico da palavra, buscando marcar o último ano vivido naquela etapa de suas vidas.\r\n\r\nNeste ano, no dia 15 de março, os alunos resolveram vir fantasiados rememorando e celebrando um período bastante festivo e próprio de nossa cultura: o carnaval, levando como doação macarrão, inclusive eles se organizaram e também solicitaram para as demais salas, sendo arrecadado 241 pacotes de macarrão, além de mais de R$ 550,00 para a aquisição do produto.\r\n\r\nA participação foi efetiva e muito divertida, sendo uma singela e verdadeira festa onde a ordem e a alegria preponderaram, tendo, inclusive, a participação de professores, os quais não mediram esforços para que aquele momento ficasse eternizado, afinal são instantes como aqueles que ficam gravados não apenas nas lentes fotográficas, mas na retina e na mente de cada um.\r\n\r\nO mais importante, como já exposto, foi a solidariedade do ato espontâneo de cada aluno, demonstrando que não pensam apenas em si, mas também em todos na sociedade, sendo que o produto será doado para entidades de nosso município. Vale ressaltar que alguns professores também vieram fantasiados, contribuindo para o sucesso do evento.\r\n\r\nCom certeza, estudar na Etec é viver, é marcar uma época de sua vida, preparando-se para o prosseguimento nos estudos e levando sempre no coração o amor e dignidade como pessoa humana.', 'trote2022.jfif', '2022-03-16', 'trote2022.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `legislacao`
--

DROP TABLE IF EXISTS `legislacao`;
CREATE TABLE IF NOT EXISTS `legislacao` (
  `cod_leg` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `arquivo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_leg`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `legislacao`
--

INSERT INTO `legislacao` (`cod_leg`, `titulo`, `data`, `arquivo`) VALUES
(1, 'Manual do Banco de Talentos', '2022-08-18', 'manualbanco.pdf'),
(2, 'Regimento Comum das Escolas Técnicas Estaduais', '2022-07-28', 'regimento.pdf'),
(3, 'Manual de integração do aluno 2022', '2022-01-28', 'manualintegra.pdf'),
(4, 'Regulamento Geral do Trabalho de Conclusão de Curso', '2015-02-27', 'regulamentotcc.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz`
--

DROP TABLE IF EXISTS `matriz`;
CREATE TABLE IF NOT EXISTS `matriz` (
  `cod_disc` int(11) NOT NULL AUTO_INCREMENT,
  `disciplina` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargahora` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matrizcurso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_disc`)
) ENGINE=MyISAM AUTO_INCREMENT=528 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `matriz`
--

INSERT INTO `matriz` (`cod_disc`, `disciplina`, `periodo`, `cargahora`, `matrizcurso`) VALUES
(1, 'Língua Portuguesa e Comunicação Profissional', '1º Ano', '120', '10 21 27 13 19'),
(2, 'Língua Portuguesa e Comunicação Profissional', '2º Ano', '120', '10 21 27 13'),
(3, 'Língua Portuguesa e Comunicação Profissional', '3º Ano', '80', '10'),
(4, 'Língua Estrangeira – Inglês e Comunicação Profissional', '1º Ano 2º Ano 3º Ano', '80', '10 21 27 13 19'),
(5, 'Matemática', '1º Ano', '80', '10'),
(6, 'Matemática', '2º Ano 3º Ano', '120', '10'),
(7, 'Arte', '1º Ano', '80', '10 21 13 19'),
(8, 'Educação Física', '1º Ano 2º Ano', '80', '10 21 27 13 19'),
(9, 'Física', '1º Ano 2º Ano', '80', '10 21 27 13'),
(10, 'História', '1º Ano 2º Ano', '80', '10 21 27 13 19'),
(11, 'Química', '1º Ano 2º Ano', '80', '10 21 27 13'),
(12, 'Biologia', '2º Ano 3º Ano', '80', '10 19'),
(13, 'Geografia', '2º Ano 3º Ano', '80', '10'),
(14, 'Filosofia', '3º Ano', '80', '10'),
(15, 'Sociologia', '3º Ano', '80', '10'),
(16, 'Programação Web I', '1º Ano', '80', '10'),
(17, 'Programação Web II', '2º Ano', '80', '10'),
(18, 'Programação Web III', '3º Ano', '80', '10'),
(19, 'Análise e Projeto de Sistemas', '1º Ano', '80', '10'),
(20, 'Design Digital', '1º Ano', '80', '10'),
(21, 'Fundamentos da Informática', '1º Ano', '80', '10'),
(22, 'Técnicas de Programação e Algoritmos', '1º Ano', '120', '10'),
(23, 'Banco de Dados I', '1º Ano', '80', '10'),
(24, 'Banco de Dados II', '2º Ano', '80', '10'),
(25, 'Desenvolvimento de Sistemas', '2º Ano', '120', '10'),
(26, 'Ética e Cidadania Organizacional', '2º Ano', '40', '10'),
(27, 'Programação de Aplicativos Mobile I', '2º Ano', '80', '10'),
(28, 'Programação de Aplicativos Mobile II ', '3º Ano', '80', '10'),
(29, 'Internet, Protocolos e Segurança de Sistemas', '3º Ano', '80', '10'),
(30, 'TCC em Desenvolvimento de Sistemas', '3º Ano', '120', '10'),
(31, 'Qualidade e Teste de Software', '3º Ano', '80', '10'),
(32, 'Sistemas Embarcados', '3º Ano', '80', '10'),
(38, 'Boas Práticas em Laboratório Farmacêutico', '1º Semestre', '50', '22'),
(37, 'Bioquímica', '1º Semestre', '50', '22'),
(36, 'Aplicativos Informatizados', '1º Semestre', '50', '22'),
(39, 'Cálculos Farmacêuticos', '1º Semestre', '50', '22'),
(40, 'Fisiologia Humana', '1º Semestre', '100', '22'),
(41, 'Introdução às Ciências Farmacêuticas', '1º Semestre', '100', '22'),
(42, 'Microbiologia e Imunologia', '1º Semestre', '100', '22'),
(43, 'Biossegurança no Setor Farmacêutico', '2º Semestre', '50', '22'),
(44, 'Ética e Cidadania Organizacional', '2º Semestre', '50', '22'),
(45, 'Farmacologia I', '2º Semestre', '100', '22'),
(46, 'Farmacotécnica I', '2º Semestre', '100', '22'),
(47, 'Linguagem, trabalho e tecnologia', '2º Semestre', '50', '22'),
(48, 'Parasitologia', '2º Semestre', '50', '22'),
(49, 'Planejamento do TCC em Farmácia', '2º Semestre', '50', '22'),
(50, 'Saúde Coletiva', '2º Semestre', '50', '22'),
(51, 'Assistência Farmacêutica', '3º Semestre', '50', '22'),
(52, 'Controle de Qualidade', '3º Semestre', '100', '22'),
(53, 'Desenvolvimento do TCC em Farmácia', '3º Semestre', '50', '22'),
(54, 'Farmacologia II', '3º Semestre', '100', '22'),
(55, 'Farmacotécnica II', '3º Semestre', '100', '22'),
(56, 'Gestão Farmacêutica', '3º Semestre', '50', '22'),
(57, 'Inglês Instrumental', '3º Semestre', '50', '22'),
(58, 'Língua Portuguesa e Comunicação Profissional', '3º Ano', '120', '21 27 13'),
(133, '', '3º Ano', NULL, '27 16 10 21 13 19 31'),
(60, 'Matemática', '1º Ano 2º Ano 3ºAno', '120', '21 27 13'),
(61, 'Geografia', '1º Ano 2º Ano', '80', '21 27 13 19'),
(62, 'Biologia', '1º Ano 2º Ano', '80', '21 27 13'),
(63, 'Filosofia', '2º Ano', '40', '21 13'),
(64, 'Língua Estrangeira – Espanhol', '3º Ano', '80', '21 13 19'),
(65, 'Sociologia', '3º Ano', '40', '21 27 13'),
(66, 'Rotinas de Departamento Pessoal', '1º Ano', '80', '21'),
(67, 'Aplicativos Informatizados', '1º Ano', '80', '21'),
(68, 'Recrutamento e Seleção de Pessoal', '1º Ano', '80', '21'),
(69, 'Projeto Integrador I', '1º Ano', '80', '21 13'),
(70, 'Projeto Integrador II', '2º Ano', '80', '21 13'),
(71, 'Cálculos de Departamento Pessoal', '2º Ano', '120', '21'),
(72, 'Legislação Trabalhista', '2º Ano', '80', '21'),
(73, 'Relações Trabalhistas', '2º Ano', '80', '21'),
(74, 'Cargos, Carreira e Remuneração', '3º Ano', '80', '21'),
(75, 'Treinamento e Desenvolvimento de Pessoal', '3º Ano', '80', '21'),
(76, 'Qualidade de Vida e Saúde e Segurança do Trabalho', '3º Ano', '80', '21'),
(77, 'Técnicas de Avaliação de Desempenho', '3º Ano', '80', '21'),
(78, 'Tecnologia da Informação em Recursos Humanos', '3º Ano', '80', '21'),
(79, 'Ética e Cidadania Organizacional', '3º Ano', '80', '21'),
(80, 'TCC em Recursos Humanos ', '3º Ano', '120', '21'),
(81, 'Arte', '3º Ano', '80', '27'),
(82, 'Filosofia', '3º Ano', '40', '27'),
(83, 'Boas Práticas de Laboratório', '1º Ano', '120', '27'),
(84, 'Informática Aplicada à Química', '1º Ano', '80', '27'),
(85, 'Síntese e Identificação dos Compostos Orgânicos', '1º Ano', '80', '27'),
(86, 'Análises de Processos Físico-Químicos I', '1º Ano', '120', '27'),
(87, 'Análises de Processos Físico-Químicos II', '2º Ano', '80', '27'),
(88, 'Análise Química Qualitativa', '2º Ano', '80', '27'),
(89, 'Análise Química Quantitativa', '2º Ano', '80', '27'),
(90, 'Operações Unitárias nos Processos Industriais', '2º Ano', '80', '27'),
(91, 'Química dos Polímeros', '2º Ano', '80', '27'),
(92, 'Análise Química Instrumental', '3º Ano', '80', '27'),
(93, 'Ética e Cidadania Organizacional', '3º Ano', '40', '27 13'),
(94, 'Microbiologia', '3º Ano', '80', '27'),
(95, 'TCC em Química', '3º Ano', '80', '27'),
(96, 'Processos Eletroquímicos – Corrosão', '3º Ano', '80', '27'),
(97, 'Química Ambiental', '3º Ano', '80', '27'),
(98, 'Química dos Alimentos', '3º Ano', '80', '27'),
(99, 'Tecnologia de Processos Industriais', '3º Ano', '120', '27'),
(100, 'Desenvolvimento de Marketing e Processos Comerciais', '1º Ano', '80', '13'),
(101, 'Legislação Empresarial', '1º Ano', '80', '13'),
(102, 'Planejamento e Organização de Rotinas Administrativas', '1º Ano', '80', '13'),
(103, 'Aplicativos informatizados', '2º Ano', '80', '13'),
(104, 'Custos, Processos e Operações Contábeis', '2º Ano', '120', '13'),
(105, 'Planejamento e Organização de Rotinas de Pessoal', '2º Ano', '80', '13'),
(106, 'Administração da Produção e Serviços', '3º Ano', '80', '13'),
(107, 'Administração de Recursos Humanos', '3º Ano', '80', '13'),
(108, 'Administração Financeira e Orçamentária', '3º Ano', '80', '13'),
(109, 'Desenvolvimento de Modelos de Negócios', '3º Ano', '80', '13'),
(110, 'Estudos da Administração Pública', '3º Ano', '80', '13'),
(111, 'Estudos de Economia, Mercado e Comércio Internacional', '3º Ano', '80', '13'),
(112, 'TCC em Administração', '3º Ano', '80', '13'),
(113, 'Processos Logísticos Empresariais', '3º Ano', '80', '13'),
(114, 'Tecnologia da Informação em Administração', '3º Ano', '80', '13'),
(132, '', '3º Semestre', NULL, '12 22 23 24 17 11 18 20 28 15 26 29 14 25 30'),
(135, '', '2º Semestre', NULL, '12 22 23 24 17 11 18 20 28 15 26 29 14 25 30'),
(166, 'Práticas em Ciências da Terra', '1º Semestre', '50', '23'),
(167, 'Segurança Ambiental', '1º Semestre', '50', '23'),
(168, 'Aplicativos Informatizados em Meio Ambiente ', '1º Semestre', '50', '23'),
(169, 'Linguagem, Trabalho e Tecnologia ', '1º Semestre', '50', '23'),
(170, 'Localização Espacial e Interpretação de Imagens', '1º Semestre', '50', '23'),
(171, 'Ações Microbiológicas na Água, Ar e Solo', '1º Semestre', '50', '23'),
(172, 'Dinâmica dos Sistemas', '1º Semestre', '100', '23'),
(173, 'Projetos em Educação Ambiental ', '1º Semestre', '50', '23'),
(174, 'Práticas em Química Ambiental', '1º Semestre', '50', '23'),
(175, 'Análises Físico-Químicas de Águas e Efluentes', '2º Semestre', '50', '23'),
(176, 'Energia e Meio Ambiente', '2º Semestre', '50', '23'),
(134, '', '2º Ano', NULL, '27 16 10 21 13 19 31'),
(177, 'Análise Biológica da Água', '2º Semestre', '50', '23'),
(136, 'Língua Portuguesa e Comunicação Profissional ', '3º Ano', '160', '19'),
(137, 'Matemática', '1º Ano', '120', '19'),
(138, 'Matemática', '2º Ano', '80', '19'),
(139, 'Matemática', '3º Ano', '160', '19'),
(140, 'Física', '2º Ano 3º Ano', '80', '19'),
(141, 'Química', '2º Ano 3º Ano', '80', '19'),
(142, 'Filosofia', '1º Ano', '40', '19'),
(143, 'Sociologia', '1º Ano', '40', '19'),
(144, 'Estudos em Linguagens, Ciências Humanas e Sociais', '1º Ano 2º Ano 3ºAno', '240', '19'),
(145, 'Empreendedorismo – Atitude Empreendedora', '1º Ano', '40', '19'),
(146, 'Empreendedorismo – Comunidade Empreendedora', '2º Ano', '40', '19'),
(147, 'Empreendedorismo – Empreendedorismo para o Mundo', '3º Ano', '40', '19'),
(148, 'Laboratório de Investigação Científica', '1º Ano', '200', '19'),
(149, 'Laboratório de Processos Criativos', '2º Ano', '200', '19'),
(150, 'Laboratório de Mediação e Intervenção Sociocultural', '3º Ano', '200', '19'),
(151, 'Língua Portuguesa e Literatura', '1º Ano', '120', '16'),
(152, 'Artes', '1º Ano', '120', '16'),
(153, 'Educação Física', '1º Ano 2º Ano 3ºAno', '80', '16'),
(154, 'História', '1º Ano 2º Ano 3ºAno', '80', '16'),
(155, 'Língua Portuguesa e Literatura', '2º Ano 3º Ano', '160', '16'),
(156, 'Geografia', '1º Ano 2º Ano 3ºAno', '80', '16'),
(157, 'Matemática', '1º Ano 2º Ano', '120', '16'),
(158, 'Matemática', '3ºAno', '160', '16'),
(159, 'Física', '1º Ano 2º Ano 3ºAno', '80', '16'),
(160, 'Química', '1º Ano 2º Ano 3ºAno', '80', '16'),
(161, 'Biologia', '1º Ano 2º Ano 3ºAno', '80', '16'),
(162, 'Língua Estrangeira Moderna (Inglês)', '1º Ano 2º Ano 3ºAno', '80', '16'),
(163, 'Educação para a Cidadania', '1º Ano 2º Ano', '80', '16'),
(164, 'Serviços de Informação / Comunicação e Códigos', '2º Ano', '80', '16'),
(165, 'Serviços de Informação / Comunicação e Códigos', '3º Ano', '120', '16'),
(178, 'Poluição Atmosférica e Mudanças Climáticas', '2º Semestre', '50', '23'),
(179, 'Planejamento do TCC em Meio Ambiente', '2º Semestre', '50', '23'),
(180, 'Sistemas de Tratamento de Água e Resíduos ', '2º Semestre', '100', '23'),
(181, 'Tecnologia de Processos Agroindustriais', '2º Semestre', '50', '23'),
(182, 'Uso, Ocupação e Conservação do Solo I ', '2º Semestre', '100', '23'),
(183, 'Avaliação de Riscos e Impacto Ambiental', '3º Semestre', '100', '23'),
(184, 'Gestão e Qualidade Ambiental ', '3º Semestre', '50', '23'),
(185, 'Legislação Ambiental', '3º Semestre', '50', '23'),
(186, 'Ética e Cidadania Organizacional ', '3º Semestre', '50', '23'),
(187, 'Poluição Ambiental e Saúde Pública', '3º Semestre', '50', '23'),
(188, 'Tecnologia de Processos', '3º Semestre', '50', '23'),
(189, 'Uso, Ocupação e Conservação do Solo II ', '3º Semestre', '50', '23'),
(190, 'Manejo e Recuperação Vegetal', '3º Semestre', '50', '23'),
(191, 'Desenvolvimento do TCC em Meio Ambiente ', '3º Semestre', '50', '23'),
(192, 'Semiotécnica em Enfermagem ', '1º Semestre', '160', '12'),
(193, 'Fundamentos de Enfermagem ', '1º Semestre', '80', '12'),
(194, 'Saúde Coletiva I', '1º Semestre', '80', '12'),
(195, 'Proteção e Prevenção em Enfermagem ', '1º Semestre', '60', '12'),
(196, 'Enfermagem em Clínica Médica e Cirúrgica I ', '1º Semestre', '100', '12'),
(197, 'Enfermagem em Centro Cirúrgico', '1º Semestre', '60', '12'),
(198, 'Assistência à Saúde da Mulher e da Criança I ', '1º Semestre', '120', '12'),
(199, 'Saúde Coletiva II', '2º Semestre', '40', '12'),
(200, 'Enfermagem Gerontológica e Geriátrica', '2º Semestre', '60', '12'),
(201, 'Primeiros Socorros', '2º Semestre', '60', '12'),
(202, 'Ética e Gestão em Enfermagem', '2º Semestre', '40', '12'),
(203, 'Saúde e Segurança Ocupacional', '2º Semestre', '40', '12'),
(204, 'Vigilância em Saúde', '2º Semestre', '60', '12'),
(205, 'Enfermagem em Saúde Mental', '2º Semestre', '60', '12'),
(206, 'Gestão em Saúde', '2º Semestre', '40', '12'),
(207, 'Aplicativos Informatizados na Enfermagem \r\n', '2º Semestre', '40', '12'),
(208, 'Linguagem, Trabalho e Tecnologia', '2º Semestre', '40', '12'),
(209, 'Enfermagem em UTI e Unidades Especializadas', '3º Semestre', '100', '12'),
(210, 'Enfermagem em Urgência e Emergência', '3º Semestre', '100', '12'),
(211, 'Planejamento do TCC em Enfermagem', '3º Semestre', '40', '12'),
(212, 'Procedimentos de Enfermagem', '3º Semestre', '140', '12'),
(213, 'Ações de Enfermagem em Saúde Coletiva', '3º Semestre', '40', '12'),
(214, 'Enfermagem em Clínica Médica e Cirúrgica II', '3º Semestre', '80', '12'),
(215, 'Enfermagem em Centro Cirúrgico e Central de Material', '3º Semestre', '80', '12'),
(216, 'Assistência à Saúde da Mulher e da Criança II', '3º Semestre', '80', '12'),
(217, 'Ações de Enfermagem no Cuidado ao Idoso', '3º Semestre', '40', '12'),
(218, 'Ações de Saúde e Segurança Ocupacional', '4º Semestre', '40', '12'),
(219, 'Ações de Enfermagem de Vigilância em Saúde', '4º Semestre', '60', '12'),
(220, 'Assistência de Enfermagem em UTI', '4º Semestre', '60', '12'),
(221, 'Assistência de Enfermagem em Saúde Mental', '4º Semestre', '40', '12'),
(222, 'Assistência de Enfermagem em Urgência e Emergência', '4º Semestre', '80', '12'),
(223, 'Enfermagem Domiciliária', '4º Semestre', '40', '12'),
(224, 'Enfermagem em Oncologia', '4º Semestre', '40', '12'),
(225, 'Relações Humanas no Trabalho', '4º Semestre', '40', '12'),
(226, 'Desenvolvimento do TCC em Enfermagem', '4º Semestre', '60', '12'),
(227, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '24'),
(228, 'Planejamento Empresarial', '1º Semestre', '50', '24'),
(229, 'Planejamento e Organização de Rotinas Administrativas', '1º Semestre', '50', '24'),
(230, 'Estudos e Desenvolvimento das Ações de Marketing', '1º Semestre', '50', '24'),
(231, 'Cálculos Financeiros e Estatísticos', '1º Semestre', '100', '24'),
(232, 'Ética e Cidadania Organizacional', '1º Semestre', '50', '24'),
(233, 'Aplicativos Informatizados', '1º Semestre', '50', '24'),
(234, 'Estudos de Economia e Mercado', '1º Semestre', '50', '24'),
(235, 'Planejamento e Organização de Rotinas de Pessoal', '1º Semestre', '50', '24'),
(236, 'Planejamento de Marketing Institucional', '2º Semestre', '50', '24'),
(237, 'Legislação Empresarial ', '2º Semestre', '50', '24'),
(238, 'Administração de Recursos Humanos ', '2º Semestre', '100', '24'),
(239, 'Custos, Processos e Operações Contábeis', '2º Semestre', '100', '24'),
(240, 'Planejamento dos Processos Comerciais', '2º Semestre', '50', '24'),
(241, 'Desenvolvimento de Modelos de Negócios ', '2º Semestre', '100', '24'),
(242, 'Planejamento do TCC em Administração', '2º Semestre', '50', '24'),
(243, 'Administração Financeira e Orçamentária', '3º Semestre', '100', '24'),
(244, 'Processos Logísticos Empresariais', '3º Semestre', '100', '24'),
(245, 'Administração da Produção e Serviços', '3º Semestre', '50', '24'),
(246, 'Tecnologia da Informação Aplicada a Administração', '3º Semestre', '50', '24'),
(247, 'Estudos da Administração Pública', '3º Semestre', '50', '24'),
(248, 'Estudos de Comércio Internacional', '3º Semestre', '50', '24'),
(249, 'Inglês Instrumental', '3º Semestre', '50', '24'),
(250, 'Desenvolvimento do TCC em Administração', '3º Semestre', '50', '24'),
(251, 'Estudos da Contabilidade ', '1º Semestre', '100', '17'),
(252, 'Planejamento Empresarial Contábil', '1º Semestre', '50', '17'),
(253, 'Estudos de Matemática Financeira', '1º Semestre', '50', '17'),
(254, 'Operações de Contabilidade Comercial', '1º Semestre', '100', '17'),
(255, 'Procedimentos de Custos Contábeis', '1º Semestre', '50', '17'),
(256, 'Aplicativos Informatizados', '1º Semestre', '50', '17'),
(257, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '17'),
(258, 'Planejamento do TCC em Contabilidade', '1º Semestre', '50', '17'),
(259, 'Legislação Trabalhista e Previdenciária', '2º Semestre', '50', '17'),
(260, 'Sistemas de Informações Contábeis', '2º Semestre', '50', '17'),
(261, 'Planejamento Tributário e Fiscal', '2º Semestre', '50', '17'),
(262, 'Estudos de Demonstrações Financeiras', '2º Semestre', '100', '17'),
(263, 'Estudos de Cenário Econômico e Contábil', '2º Semestre', '100', '17'),
(264, 'Ética e Cidadania Organizacional', '2º Semestre', '50', '17'),
(265, 'Inglês Instrumental', '2º Semestre]', '50', '17'),
(266, 'Desenvolvimento do TCC em Contabilidade', '2º Semestre', '50', '17'),
(267, 'Estudos de Logística', '1º Semestre', '50', '11'),
(268, 'Planejamento Organizacional Aplicado à Logística ', '1º Semestre', '100', '11'),
(269, 'Aplicativos Informatizados', '1º Semestre', '50', '11'),
(270, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '11'),
(271, 'Ética e Cidadania Organizacional', '1º Semestre', '50', '11'),
(272, 'Inglês Instrumental ', '1º Semestre', '50', '11'),
(273, 'Organização de Recursos Humanos', '1º Semestre', '50', '11'),
(274, 'Cálculos Financeiros e Estatísticos', '1º Semestre', '50', '11'),
(275, 'Planejamento do Processo de Suprimentos', '1º Semestre', '50', '11'),
(276, 'Processos de Organização dos Recursos e Materiais', '2º Semestre', '100', '11'),
(277, 'Planejamento dos Custos Logísticos', '2º Semestre', '50', '11'),
(278, 'Planejamento, Programação e Controle da Produção', '2º Semestre', '100', '11'),
(279, 'Procedimentos de Movimentação de Materiais', '2º Semestre', '100', '11'),
(280, 'Estudos da Cadeia de Abastecimento', '2º Semestre', '50', '11'),
(281, 'Estudos de Marketing aplicados à Logística', '2º Semestre', '50', '11'),
(282, 'Planejamento do TCC em Logística', '2º Semestre', '50', '11'),
(283, 'Organização e Estrutura de Transportes\r\n', '3º Semestre', '100', '11'),
(284, 'Organização das Ações em Saúde e Segurança no Trabalho', '3º Semestre', '50', '11'),
(285, 'Estudos da Logística Internacional e Economia\r\n', '3º Semestre', '50', '11'),
(286, 'Processos de Organização da Logística Reversa', '3º Semestre', '50', '11'),
(287, 'Procedimentos de Gestão da Qualidade Total', '3º Semestre', '50', '11'),
(288, 'Tecnologia da Informação aplicada à Logística', '3º Semestre', '100', '11'),
(289, 'Legislação Tributária', '3º Semestre', '50', '11'),
(290, 'Desenvolvimento do TCC em Logística', '3º Semestre', '50', '11'),
(291, 'Introdução ao Marketing', '1º Semestre', '100', '18'),
(292, 'Pesquisa de Mercado', '1º Semestre', '100', '18'),
(293, 'Comportamento do Consumidor', '1º Semestre', '50', '18'),
(294, 'Comunicação Integrada ao Marketing', '1º Semestre', '100', '18'),
(295, 'Aplicativos Informatizados', '1º Semestre', '50', '18'),
(296, 'Ética e Cidadania Organizacional', '1º Semestre', '50', '18'),
(297, 'Linguagem, Trabalho e Tecnologia ', '1º Semestre', '50', '18'),
(298, 'Estratégias de Marketing', '2º Semestre', '100', '18'),
(299, 'Informática Aplicada ao Marketing', '2º Semestre', '100', '18'),
(300, 'Promoção de Vendas e Merchandising', '2º Semestre', '50', '18'),
(301, 'Modelos de Negócios', '2º Semestre', '100', '18'),
(302, 'Administração Financeira Aplicada ao Marketing', '2º Semestre', '50', '18'),
(303, 'Inglês Instrumental', '2º Semestre', '50', '18'),
(304, 'Planejamento do TCC em Marketing', '2º Semestre', '50', '18'),
(305, 'Canais de Distribuição', '3º Semestre', '50', '18'),
(306, 'Marketing Institucional', '3º Semestre', '50', '18'),
(307, 'Plano de Marketing', '3º Semestre', '100', '18'),
(308, 'Marketing de Relacionamento', '3º Semestre', '50', '18'),
(309, 'Espanhol Instrumental', '3º Semestre', '50', '18'),
(310, 'Marketing Digital e E-Commerce', '3º Semestre', '100', '18'),
(311, 'Legislação de Mercado', '3º Semestre', '50', '18'),
(312, ' Desenvolvimento do TCC em Marketing', '3º Semestre', '50', '18'),
(313, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '20'),
(314, 'Rotinas de Departamento Pessoal', '1º Semestre', '100', '20'),
(315, 'Aplicativos Informatizados', '1º Semestre', '50', '20'),
(316, 'Recrutamento e Seleção de Pessoal', '1º Semestre', '100', '20'),
(317, 'Cálculos de Folha de Pagamento', '1º Semestre', '100', '20'),
(318, 'Estudos do Regime de Trabalho Celetista', '1º Semestre', '100', '20'),
(319, 'Inglês Instrumental', '2º Semestre', '50', '20'),
(320, 'Cargos, Carreira e Remuneração', '2º Semestre', '100', '20'),
(321, 'Comunicação Corporativa', '2º Semestre', '100', '20'),
(322, 'Relações Jurídicas do Trabalho', '2º Semestre', '100', '20'),
(323, 'Modelos de Gestão', '2º Semestre', '100', '20'),
(324, 'Planejamento do TCC em Recursos Humanos', '2º Semestre', '50', '20'),
(325, 'Ética e Cidadania Organizacional', '3º Semestre', '50', '20'),
(326, 'Comportamento Organizacional', '3º Semestre', '100', '20'),
(327, 'Gestão de Desempenho', '3º Semestre', '100', '20'),
(328, 'Consultoria e Projetos em Recursos Humanos', '3º Semestre', '100', '20'),
(329, 'Qualidade de Vida e Saúde e Segurança no Trabalho', '3º Semestre', '100', '20'),
(330, 'Desenvolvimento do TCC em Recursos Humanos \r\n', '3º Semestre', '100', '20'),
(331, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '28'),
(332, 'Programação e Algoritmos', '1º Semestre', '100', '28'),
(333, 'Banco de Dados I', '1º Semestre', '50', '28'),
(334, 'Análise e Projeto de Sistemas', '1º Semestre', '50', '28'),
(335, 'Design Digital', '1º Semestre', '50', '28'),
(336, 'Programação Web I ', '1º Semestre', '100', '28'),
(337, 'Fundamentos da Informática', '1º Semestre', '50', '28'),
(338, 'Técnicas de Programação', '1º Semestre', '50', '28'),
(339, 'Inglês Instrumental', '2º Semestre', '50', '28'),
(340, 'Desenvolvimento de Sistemas', '2º Semestre', '100', '28'),
(341, 'Banco de Dados II', '2º Semestre', '50', '28'),
(342, 'Internet e Protocolos', '2º Semestre', '50', '28'),
(343, 'Programação de Aplicativos Mobile I', '2º Semestre', '100', '28'),
(344, 'Programação Web II', '2º Semestre', '100', '28'),
(345, 'Planejamento do TCC em Desenvolvimento de Sistemas', '2º Semestre', '50', '28'),
(346, 'Segurança de Sistemas de Informação ', '3º Semestre', '50', '28'),
(347, 'Banco de Dados III', '3º Semestre', '50', '28'),
(348, 'Sistemas Embarcados', '3º Semestre', '50', '28'),
(349, 'Programação de Aplicativos Mobile II', '3º Semestre', '100', '28'),
(350, 'Programação Web III', '3º Semestre', '100', '28'),
(351, 'Qualidade e Teste de Software', '3º Semestre', '50', '28'),
(352, 'Ética e Cidadania Organizacional', '3º Semestre', '50', '28'),
(353, 'Desenvolvimento do TCC em Desenvolvimento de Sistemas', '3º Semestre', '50', '28'),
(354, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '15'),
(355, 'Suporte ao Usuário', '1º Semestre', '50', '15'),
(356, 'Operação e Configuração de Aplicativos I', '1º Semestre', '50', '15'),
(357, 'Gestão de Sistemas Operacionais I', '1º Semestre', '50', '15'),
(358, 'Sistemas de Tecnologia de Informação e Comunicação', '1º Semestre', '50', '15'),
(359, 'Instalação e Manutenção de Computadores', '1º Semestre', '100', '15'),
(360, 'Programação de Computadores I', '1º Semestre', '100', '15'),
(361, 'Modelagem de Banco de Dados', '1º Semestre', '50', '15'),
(362, 'Suporte em Informática', '2º Semestre', '50', '15'),
(363, 'Operação e Configuração de Aplicativos II', '2º Semestre', '50', '15'),
(364, 'Gestão de Sistemas Operacionais II', '2º Semestre', '50', '15'),
(365, 'Redes de Comunicação de Dados I', '2º Semestre', '100', '15'),
(366, 'Programação de Computadores II', '2º Semestre', '100', '15'),
(367, 'Suporte a Banco de Dados', '2º Semestre', '50', '15'),
(368, 'Planejamento do TCC em Informática', '2º Semestre', '100', '15'),
(369, 'Inglês Instrumental', '3º Semestre', '50', '15'),
(370, 'Gestão de Sistemas Operacionais III', '3º Semestre', '100', '15'),
(371, 'Segurança Digital', '3º Semestre', '50', '15'),
(372, 'Redes de Comunicação de Dados II', '3º Semestre', '100', '15'),
(373, 'Desenvolvimento de Sistemas Embarcados', '3º Semestre', '50', '15'),
(374, 'Computação em Nuvem e Mídias Sociais', '3º Semestre', '50', '15'),
(375, 'Ética e Cidadania Organizacional', '3º Semestre', '50', '15'),
(376, 'Desenvolvimento do TCC em Informática', '3º Semestre', '50', '15'),
(377, 'Gestão de Sistemas Operacionais', '1º Semestre', '50', '26'),
(378, 'Operação de Softwares Aplicativos I', '1º Semestre', '50', '26'),
(379, 'Instalação e Manutenção de Computadores', '1º Semestre', '50', '26'),
(380, 'Desenvolvimento e Design de Websites I', '1º Semestre', '50', '26'),
(381, 'Lógica de Programação', '1º Semestre', '100', '26'),
(382, 'Arte Digital', '1º Semestre', '50', '26'),
(383, 'Empreendedorismo', '1º Semestre', '50', '26'),
(384, 'Inglês Instrumental', '1º Semestre', '50', '26'),
(385, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '26'),
(386, 'Redes de Comunicação de Dados I', '2º Semestre', '50', '26'),
(387, 'Operação de Softwares Aplicativos II', '2º Semestre', '50', '26'),
(388, 'Desenvolvimento de Software I', '2º Semestre', '100', '26'),
(389, 'Desenvolvimento e Design de Websites II', '2º Semestre', '50', '26'),
(390, 'Projeto de Aplicações Web I', '2º Semestre', '50', '26'),
(391, 'Tecnologias e Linguagens para Banco de Dados I', '2º Semestre', '50', '26'),
(392, 'Composição e Projeto', '2º Semestre', '50', '26'),
(393, 'Criação e Editoração de Imagens', '2º Semestre', '50', '26'),
(394, 'Planejamento do TCC em Informática para Internet\r\n', '2º Semestre', '50', '26'),
(395, 'Redes de Comunicação de Dados II', '3º Semestre', '50', '26'),
(396, 'Programação para Internet', '3º Semestre', '50', '26'),
(397, 'Desenvolvimento de Software II', '3º Semestre', '100', '26'),
(398, 'Desenvolvimento e Design de Websites III', '3º Semestre', '50', '26'),
(399, 'Projeto de Aplicações Web II', '3º Semestre', '50', '26'),
(400, 'Tecnologias e Linguagens para Banco de Dados II', '3º Semestre', '50', '26'),
(401, 'Marketing para Web', '3º Semestre', '50', '26'),
(402, 'Ética e Cidadania Organizacional', '3º Semestre', '50', '26'),
(403, 'Desenvolvimento do TCC em Informática para Internet\r\n', '3º Semestre', '50', '26'),
(404, 'Ética e Cidadania Organizacional', '1º Semestre', '50', '29'),
(405, 'Inglês Instrumental', '1º Semestre', '50', '29'),
(406, 'Sistemas Operacionais para Redes I', '1º Semestre', '100', '29'),
(407, 'Hardware', '1º Semestre', '50', '29'),
(408, 'Lógica Computacional', '1º Semestre', '50', '29'),
(409, 'Sistemas Embarcados I', '1º Semestre', '50', '29'),
(410, 'Aplicativos Básicos', '1º Semestre', '50', '29'),
(411, 'Protocolos de Comunicação I', '1º Semestre', '50', '29'),
(412, 'Estrutura de Redes I', '1º Semestre', '50', '29'),
(413, 'Estrutura de Redes II', '2º Semestre', '50', '29'),
(414, 'Sistemas Operacionais para Redes II', '2º Semestre', '100', '29'),
(415, 'Sistemas Embarcados II', '2º Semestre', '50', '29'),
(416, 'Protocolos de Comunicação II', '2º Semestre', '100', '29'),
(417, 'Computação em Nuvem', '2º Semestre', '50', '29'),
(418, 'Projetos de Redes I', '2º Semestre', '50', '29'),
(419, 'Empreendedorismo em Redes de Computadores', '2º Semestre', '50', '29'),
(420, 'Planejamento do TCC em Redes de Computadores', '2º Semestre', '50', '29'),
(421, 'Projetos de Redes II', '3º Semestre', '50', '29'),
(422, 'Estrutura de Redes III', '3º Semestre', '50', '29'),
(423, 'Protocolos de Comunicação III', '3º Semestre', '50', '29'),
(424, 'Segurança da Informação', '3º Semestre', '100', '29'),
(425, 'Internet das Coisas', '3º Semestre', '100', '29'),
(426, 'Análise e Desempenho', '3º Semestre', '50', '29'),
(427, 'Linguagem, Trabalho e Tecnologia', '3º Semestre', '50', '29'),
(428, 'Desenvolvimento do TCC em Redes de\r\nComputadores', '3º Semestre', '50', '29'),
(429, 'Estudos de Química Geral Aplicada', '1º Semestre', '50', '14'),
(430, 'Produção de Matéria-Prima\r\n', '1º Semestre', '50', '14'),
(431, 'Operação de Processos Físicos', '1º Semestre', '50', '14'),
(432, 'Análise de Processos Orgânicos', '1º Semestre', '50', '14'),
(433, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '14'),
(434, 'Estudos de Matemática Aplicada', '1º Semestre', '50', '14'),
(435, 'Operação de Equipamentos e Processos I', '1º Semestre', '100', '14'),
(436, 'Análises de Ensaios Quantitativos', '1º Semestre', '100', '14'),
(437, 'Tecnologia de Processos de Colheita', '2º Semestre', '50', '14'),
(438, 'Operação de Equipamentos e Processos II', '2º Semestre', '100', '14'),
(439, 'Sistemas de Utilidades e Energia', '2º Semestre', '50', '14'),
(440, 'Aplicativos Informatizados na Produção de Açúcar e Álcool', '2º Semestre', '50', '14'),
(441, 'Higiene e Segurança do Trabalho', '2º Semestre', '50', '14'),
(442, 'Análise e Controle de Processos', '2º Semestre', '100', '14'),
(443, 'Ética e Cidadania Organizacional', '2º Semestre', '50', '14'),
(444, 'Planejamento do TCC em Açúcar e Álcool', '2º Semestre', '50', '14'),
(445, 'Automação Industrial Aplicada em Açúcar e Álcool', '3º Semestre', '50', '14'),
(446, 'Controle de Qualidade', '3º Semestre', '100', '14'),
(447, 'Tecnologia da Fabricação do Álcool', '3º Semestre', '100', '14'),
(448, 'Tecnologia da Fabricação do Açúcar', '3º Semestre', '100', '14'),
(449, 'Inglês Instrumental', '3º Semestre', '50', '14'),
(450, 'Tecnologia de Subprodutos', '3º Semestre', '50', '14'),
(451, 'Desenvolvimento do TCC em Açúcar e Álcool', '3º Semestre', '50', '14'),
(452, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '25'),
(453, 'Aplicativos Informatizados', '1º Semestre', '50', '25'),
(454, 'Boas Práticas de Laboratório', '1º Semestre', '100', '25'),
(455, 'Análise de Processos Físico-Químicos I', '1º Semestre', '100', '25'),
(456, 'Tecnologia dos Materiais Inorgânicos', '1º Semestre', '100', '25'),
(457, 'Síntese e Identificação dos Compostos\r\nOrgânicos', '1º Semestre', '100', '25'),
(458, 'Inglês Instrumental', '2º Semestre', '50', '25'),
(459, 'Microbiologia', '2º Semestre', '50', '25'),
(460, 'Análise Química Qualitativa', '2º Semestre', '50', '25'),
(461, 'Análise Química Quantitativa', '2º Semestre', '100', '25'),
(462, 'Química dos Polímeros', '2º Semestre', '50', '25'),
(463, 'Análise de Processos Físico-Químicos II', '2º Semestre', '100', '25'),
(464, 'Operações Unitárias nos Processos Industriais I', '2º Semestre', '50', '25'),
(465, 'Planejamento do TCC em Química', '2º Semestre', '50', '25'),
(466, 'Tecnologia dos Processos Industriais', '3º Semestre', '100', '25'),
(467, 'Operações Unitárias nos Processos\r\nIndustriais II', '3º Semestre', '50', '25'),
(468, 'Processos Eletroquímicos – Corrosão', '3º Semestre', '50', '25'),
(469, 'Química Ambiental', '3º Semestre', '50', '25'),
(470, 'Análise Química Instrumental', '3º Semestre', '100', '25'),
(471, 'Química dos Alimentos', '3º Semestre', '50', '25'),
(472, 'Ética e Cidadania Organizacional', '3º Semestre', '50', '25'),
(473, 'Desenvolvimento do TCC em Química', '3º Semestre', '50', '25'),
(474, 'Fundamentos da Saúde e Segurança no\r\nTrabalho ', '1º Semestre', '100', '30'),
(475, 'Legislação e Normas Regulamentadoras', '1º Semestre', '100', '30'),
(476, 'Gestão Empresarial', '1º Semestre', '50', '30'),
(477, 'Meio Ambiente e Segurança do Trabalho', '1º Semestre', '50', '30'),
(478, 'Suporte Emergencial à Vida', '1º Semestre', '50', '30'),
(479, 'Ética e Cidadania Organizacional', '1º Semestre', '50', '30'),
(480, 'Linguagem, Trabalho e Tecnologia', '1º Semestre', '50', '30'),
(481, 'Aplicativos Informatizados', '1º Semestre', '50', '30'),
(482, 'Representação Digital em Segurança do\r\nTrabalho', '2º Semestre', '50', '30'),
(483, 'Técnicas de Estruturação de Campanhas', '2º Semestre', '50', '30'),
(484, 'Gestão em Saúde', '2º Semestre', '50', '30'),
(485, 'Análise Ergonômica do Trabalho', '2º Semestre', '100', '30'),
(486, 'Segurança nos Processos Industriais', '2º Semestre', '50', '30'),
(487, 'Higiene e Segurança do Trabalho', '2º Semestre', '100', '30'),
(488, 'Inglês Instrumental', '2º Semestre', '50', '30'),
(489, 'Planejamento do TCC em Segurança do Trabalho', '2º Semestre', '50', '30'),
(490, 'Prevenção e Combate a Sinistros', '3º Semestre', '100', '30'),
(491, 'Análise de Riscos', '3º Semestre', '50', '30'),
(492, 'Normalização em Segurança do Trabalho', '3º Semestre', '100', '30'),
(493, 'Prevenção às Doenças Profissionais e do\r\nTrabalho', '3º Semestre', '50', '30'),
(494, 'Programas Aplicados em Saúde e\r\nSegurança do Trabalho', '3º Semestre', '100', '30'),
(495, 'Relações Humanas no Trabalho', '3º Semestre', '50', '30'),
(496, 'Desenvolvimento do TCC em Segurança do\r\nTrabalho', '3º Semestre', '50', '30'),
(497, 'Língua Portuguesa e Comunicação Profissional', '1º Ano', '160', '31'),
(498, 'Língua Portuguesa e Comunicação Profissional', '2º Ano', '160', '31'),
(499, 'Língua Portuguesa e Comunicação Profissional', '3º Ano', '160', '31'),
(501, 'Língua Estrangeira – Inglês e Comunicação Profissional', '1º Ano', '80', '31'),
(500, 'Arte', '1º Ano', '120', '31'),
(502, 'Língua Estrangeira – Inglês e Comunicação Profissional', '2º Ano 3º Ano ', '80', '31'),
(503, 'Educação Física', '1º Ano 2º Ano 3º Ano', '80', '31'),
(504, 'Aplicativos Informatizados', '1º Ano', '80', '31'),
(505, 'História', '1º Ano 2º Ano 3º Ano', '80', '31'),
(506, 'Geografia', '1º Ano 2º Ano 3º Ano', '80', '31'),
(507, 'Filosofia', '1º Ano 2º Ano 3º Ano', '40', '31'),
(508, 'Sociologia', '1º Ano 2º Ano 3º Ano', '40', '31'),
(509, 'Física', '1º Ano 2º Ano 3º Ano', '80', '31'),
(510, 'Química', '1º Ano 2º Ano 3º Ano', '80', '31'),
(511, 'Biologia', '1º Ano 2º Ano 3º Ano', '80', '31'),
(512, 'Matemática', '1º Ano 2º Ano 3º Ano', '160', '31'),
(513, 'Gestão Empresarial', '1º Ano', '80', '31'),
(514, 'Administração de Marketing', '1º Ano', '120', '31'),
(515, 'Ética e Cidadania Organizacional', '1º Ano', '40', '31'),
(516, 'Técnicas Organizacionais', '1º Ano', '80', '31'),
(517, 'Gestão de Pessoas I', '2º Ano', '120', '31'),
(518, 'Gestão de Pessoas II', '3º Ano', '120', '31'),
(519, 'Cálculos Financeiros e Estatísticos', '2º Ano', '80', '31'),
(520, 'Legislação Empresarial', '2º Ano', '80', '31'),
(521, 'Custos, Processos e Operações Contábeis', '2º Ano', '120', '31'),
(522, 'Gestão Empreendedora e Inovação', '2º Ano', '80', '31'),
(523, 'Gestão Financeira e Econômica', '3º Ano', '80', '31'),
(524, 'Gestão de Produção e Materiais', '3º Ano', '80', '31'),
(525, 'Logística Empresarial', '3º Ano', '80', '31'),
(526, 'TCC em Administração', '3º Ano', '80', '31'),
(59, 'Língua Portuguesa e Comunicação Profissional', '2º Ano', '80', '19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `cod_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `imagem_post` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_noticia`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`cod_noticia`, `titulo`, `descricao`, `imagem`, `data`, `imagem_post`) VALUES
(3, 'Prova do Processo Seletivo Vestibulinho', 'A Escola Técnica Estadual (Etec) Amim Jundi informa que a prova do Vestibulinho 2º semestre 2022 acontecerá no domingo, dia 03/07/2022 às 13h30min.\r\n \r\nEm Osvaldo Cruz as provas ocorrerão na sede da Etec Amim Jundi, na Rua Japão, nº 724, Centro. \r\n \r\nQuem vai concorrer a uma das vagas deve ficar atento às seguintes informações:\r\n \r\n• Os portões dos locais de prova serão abertos às 12h30 e fechados às 13h30. Após o fechamento do portão, não será permitida a entrada de nenhum candidato;\r\n \r\n• O candidato deverá permanecer na sala de prova até, no mínimo, as 15h30. Após esse horário será possível deixar o local e levar consigo o caderno de questões;\r\n \r\n• É preciso levar uma caneta esferográfica de tinta preta ou azul, lápis preto nº 2, borracha e régua;\r\n \r\n• É imprescindível levar um documento de identidade original com foto, em boas condições de visibilidade para conferência dos dados;\r\n \r\n• É proibido usar calculadora, computador, telefone celular e outros aparelhos eletrônicos durante a prova. Todos os equipamentos devem permanecer desligado nas dependências do prédio;\r\n \r\n• Não é permitido o uso de chapéu, boné, lenço, gorro, óculos escuros, corretivo líquido/fita ou quaisquer outros materiais, incluindo papéis, estranhos à prova;\r\n \r\n• É proibido portar armas de qualquer espécie, mesmo com documento de porte. O participante que possuir autorização para porte de arma de fogo deverá deixar a arma junto à Coordenação do local de aplicação, antes do início da prova;\r\n \r\n• É proibida a permanência de pessoas estranhas e acompanhantes de candidatos dentro do prédio e nos pátios dos locais de prova.\r\n \r\nMais informações podem ser conferidas na Portaria do Vestibulinho e no Manual do Candidato, disponíveis no site www.vestibulinhoetec.com.br ou pelo telefone (18) 3528-3982.', 'vestibulinho.jpeg', '2022-06-30', ''),
(2, 'Processo Simplificado de Vagas Remanescentes', 'Comunicado de processo simplificado de vagas remanescentes - Técnico em Meio Ambiente.\r\n\r\n \r\n\r\nO Diretor da Escola Técnica Estadual Amim Jundi, no uso de suas atribuições, COMUNICA a existência de 27 vagas no 2º módulo da Habilitação Profissional de Técnico em Meio Ambiente, disponíveis para recebimento de transferências.\r\n\r\nOs interessados deverão inscrever-se na Secretaria da Etec, no período de 08/06/2022 a 24/06/2022, mediante preenchimento de requerimento e apresentação da matriz curricular cursada na escola de origem.\r\n\r\nAs solicitações serão atendidas de acordo com o número de vagas existentes e os critérios estabelecidos pelo Conselho de Escola, a saber:\r\n\r\n1º - Análise comparativa entre os itinerários formativos do curso pretendido e dos cursos e/ou módulos concluídos pelo interessado;\r\n\r\n2º - Avaliação, através de análise documental e, quando necessário, aplicação de avaliação formal, que poderá contemplar os formatos escrita, prática e entrevista, das competências exigidas pelo curso pretendido, que o interessado demonstrou já possuir. Esta avaliação será realizada no dia 29/06/2022 às 20h00, em uma sala da Etec Amim Jundi;\r\n\r\n3º - Determinação do itinerário formativo que deverá ser cumprido pelo interessado, no curso pretendido;\r\n\r\n4º - Definição do módulo em que o interessado será classificado, com indicação dos componentes nos quais eventualmente precisará realizar um programa especial de estudos.\r\n\r\nSe o número de candidatos for superior ao número de vagas existentes, dentro de cada critério acima mencionado, a Etec aplicará uma avaliação teórica, constituída de uma prova com 20 (vinte) questões-teste, cada uma, com 5 (cinco) alternativas (A,B,C,D,E), relacionadas às competências profissionais dos módulos anteriores do curso técnico pretendido;\r\n\r\nO candidato deverá acompanhar todo o processo de preenchimento das vagas junto à unidade.\r\n\r\nO resultado final deste processo será divulgado em 11/07/2022.\r\n\r\nO candidato convocado para a matrícula que não comparecer na data em que for convocado e / ou não portar os documentos necessários para efetuá-la, perderá o direito à vaga e esta será destinada ao próximo classificado.', 'vagameioambiente.jpg', '2022-06-22', '0'),
(1, 'Vestibulinho Etec Amim Jundi - segundo semestre 2022', 'O período de inscrição para o processo seletivo da Escola Técnica Estadual (Etec) Amim Jundi, de Osvaldo Cruz, começa nesta quinta-feira, 19, e vai até dia 6 de junho. O Vestibulinho para o segundo semestre de 2022 oferece 240 vagas para cursos Técnicos. A inscrição deve ser feita exclusivamente pela internet.  A prova será aplicada dia 3 de julho, de forma presencial.\r\n\r\nVagas para os cursos Técnicos: Contabilidade, Enfermagem, Farmácia, Informática para Internet, Marketing e Recursos Humanos. Todos cursos serão oferecidos no período noturno, com 40 vagas cada.\r\n\r\nAs inscrições devem ser feitas, exclusivamente, no site www.vestibulinhoetec.com.br, no período de 19 de maio até as 15 horas do dia 6 de junho.\r\n\r\nBasta preencher a ficha de inscrição disponível no menu “Área do candidato”, que deve ser acessada com o CPF do candidato e de senha de segurança. O preenchimento das informações é de responsabilidade do candidato ou de seu representante legal, quando menor de 16 anos.\r\n\r\nApós o preenchimento das informações, é preciso imprimir o boleto bancário para o pagamento da taxa de R$ 39. O valor deve ser pago em qualquer agência bancária, via internet, por meio de aplicativo bancário ou ainda por meio da ferramenta disponível no site oficial do processo seletivo, com cartão de crédito, até o dia 6 de junho.\r\n\r\nPara os candidatos que não tem acesso a computadores e internet, a Etec Amim Jundi disponibilizará equipamentos para a realização da inscrição.', 'vestsegundosem.jpg', '2022-05-20', '0'),
(13, 'Convoc. para Aulas Teste Processos Seletivos de Docentes', 'A Etec Amim Jundi, de Osvaldo Cruz, convoca os candidatos do Processo Seletivo de Docentes para Prova de Métodos Pedagógicos conforme publicações em Diário Oficial disponíveis nos links abaixo:\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/01/2022 - 405 – Geografia (Base Nacional Comum) (Ensino Médio (BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/02/2022 - 120 – Boas Práticas de Laboratório (Química).\r\n \r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/03/2022 - 5417 – Planejamento e Organização de Rotinas Administrativas(Administração Integrado ao Ensino Médio (MTec – Programa Novotec Integrado)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/07/2022 - 5049 – Qualidade e Teste de Software (Desenvolvimento de Sistemas).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/08/2022 - 237 – Desenvolvimento e Design de Websites I (Informática para Internet)\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/09/2022 - 3432 – Práticas de Departamento Pessoal(Recursos Humanos).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/10/2022 - 936 – Química Ambiental (para a Habilitação Química).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/16/2021 - Língua Portuguesa, Literatura e Comunicação Profissional (Base Nacional Comum/ ETIM / MTec)(Ensino Médio (BNC/ BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n \r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/17/2021 - Língua Estrangeira Moderna – Inglês e Comunicação Profissional (Base Nacional Comum/ ETIM / MTec)(Ensino Médio (BNC/ BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/18/2021 - Matemática (Base Nacional Comum) (Ensino Médio (BNC/ BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/19/2021 - História (Base Nacional Comum) (Ensino Médio (BNC/ BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/20/2021 - Química (Base Nacional Comum)(Ensino Médio (BNC/ BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/21/2021 - Artes (Base Nacional Comum)(Ensino Médio (BNC/ BNCC/ ETIM/ MTec/ EM com Ênfases/ Itinerários Formativos/ PD)).\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/23/2021 - Bioquímica (Farmácia)', 'convoca.jpg', '2022-05-19', 'convoca.jpg'),
(14, 'Cantina Escolar', 'A Diretoria Executiva da Associação de Pais e Mestres da Escola Técnica Estadual Amim Jundi, sita à Rua Japão, 724, bairro Centro, em Osvaldo Cruz - SP, torna público a abertura de Processo de Licitação para administração dos serviços da Cantina Escolar da referida escola e comunica aos interessados que as instruções deverão ser retiradas no endereço acima, nos dias 12 e 13 de maio de 2022, no horário das 08h00 às 11h00 e das 14h00 às 17h00 e que as propostas deverão ser apresentadas no mesmo local  no dia 24 de maio de 2022, às 14h30.\r\n\r\n \r\n\r\nO edital também poderá ser solicitado/retirado via e-mail. Deverá ser enviada uma mensagem para o endereço e027adm@cps.sp.gov.br. Na mensagem o solicitante deverá informar que “Requer o edital nº 001/2022 do processo de licitação para concessão dos serviços da cantina escolar da APM da Etec Amim Jundi”. Também deverá ser informado o nome completo do solicitante, o número do RG, número do CPF e um número telefone, com DDD, para contato. Serão enviados os editais para os e-mails recebidos até as 17h00 do dia 13/05/2022.\r\n\r\nA abertura dos envelopes contendo as propostas será realizada em sessão pública, no dia 24 de maio de 2022 às 14h45 horas, nas dependências da escola.', 'cantina.jpg', '2022-05-12', 'cantina'),
(15, 'Convoc. para Aula Teste Processo Seletivo de Docentes', 'A Etec Amim Jundi, de Osvaldo Cruz, convoca os candidatos do Processo Seletivo de Docentes para Prova de Métodos Pedagógicos conforme publicações em Diário Oficial disponíveis nos links abaixo:\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/24/2021\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/25/2021\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/04/2022\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/05/2022\r\n\r\n\r\n - Convocação para Prova Métodos Pedagógicos Processo Seletivo de Docentes Av. nº 027/06/2022\r\n\r\n\r\nDúvidas, entre em contato conosco pelo telefone (18) 3528-3982 ou pelo e-mail: e027adm@cps.sp.gov.br', 'convoca1.jpg', '2022-05-10', 'convoca1.jpg'),
(16, 'Processo Seletivo para Docentes 2022', 'A Etec Amim Jundi, de Osvaldo Cruz, informa que estarão abertas, no período de 31/03 até às 23h59 do dia 14/04/2022, as inscrições para os Processos Seletivos de Docentes.\r\n\r\nOs Avisos de Abertura de Inscrições encontram-se disponíveis nos links abaixo:\r\n \r\n\r\n- Aviso nº 027/02/2022 - Boas Práticas em Laboratório (Química)\r\n\r\n- Aviso nº 027/03/2022 - Planejamento e Organização de Rotinas Administrativas (Etim e Novotec)\r\n \r\n- Aviso nº 027/04/2022 - Saúde Coletiva II (Enfermagem)\r\n\r\n- Aviso nº 027/05/2022 - Enfermagem Gerontológica e Geriátrica (Enfermagem)\r\n\r\n- Aviso nº 027/06/2022 - Relações Humanas no Trabalho (Enfermagem)\r\n\r\n- Aviso nº 027/07/2022 - Qualidade e Teste de Software (Desenvolvimento de Sistemas)\r\n\r\n- Aviso nº 027/08/2022 - Desenvolvimento e Design de Websites (Informática para Internet)\r\n \r\n- Aviso nº 027/09/2022 - Práticas de Departamento Pessoal (Recursos Humanos)\r\n\r\n- Aviso nº 027/10/2022 - Química Ambiental (Química)\r\n \r\n\r\n As inscrições deverão ser feitas exclusivamente online por meio do link: \r\n \r\n \r\nwww.urhsistemas.cps.sp.gov.br/dgsdad/SelecaoPublica/ETEC/PSS/Abertos.aspx\r\n\r\n \r\nCaso tenha dúvidas, entre em contato conosco pelo telefone (18) 3528-3982 ou pelo e-mail: e027adm@cps.sp.gov.br', 'processo.jpg', '2022-03-30', 'processo.jpg'),
(17, 'Preenchimento de Vagas Remanescentes', 'Processo de Seleção de Candidatos para o preenchimento de vagas remanescentes para o primeiro módulo do curso Técnico em Redes de Computadores, para o primeiro semestre do ano letivo de 2022.', 'vagas.jpg', '2022-03-08', 'vagas.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

DROP TABLE IF EXISTS `professores`;
CREATE TABLE IF NOT EXISTS `professores` (
  `cod_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulacao` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`cod_prof`, `nome`, `titulacao`, `curso`, `area`, `email`) VALUES
(1, 'Cesar Augusto Pinheiro Vitor', 'Especialista', '15 10 29 28 29', 'Tecnologia da Informação', 'cesar.vitor01@etec.sp.gov.br'),
(2, 'Rosiane Wolf Luz', 'Mestre', '28 15 26 10', 'Tecnologia da Informação', 'rosiwluz@gmail.com'),
(3, 'Daiane Marcela Piccolo', 'Mestre', '28 15 26', 'Tecnologia da Informação', ''),
(4, 'André Eduardo de Souza', 'Especialista', '31', 'Gestão e Negócios', 'andre.souza@etec.sp.gov.br'),
(5, 'Antonio Carlos Baratella', 'Especialista', '31 24 11', 'Gestão e Negócios', 'prof.baratella@gmail.com'),
(6, 'Diego César Rodrigues', 'Especialista', '24 11', 'Direito', ''),
(7, 'Eduardo de Souza Pontes', 'Especialista', '10', 'Letras: Português e Inglês', 'eduardo.pontes10@etec.sp.gov.br'),
(8, 'Elaine Uranga Clivelaro Buturi', 'Especialista', '10 31 16', 'Letras: Português e Inglês', ''),
(9, 'Gilson da Silva', 'Especialista', '31 24 29 11', 'Gestão e Negócios', 'profgsilva@gmail.com'),
(10, 'José Aurélio Pieretti', 'Especialista', '', '', ''),
(11, 'Osmar Campanari', 'Especialista', '24', 'Gestão e Negócios', ''),
(12, 'Paulo Sérgio Finoti', 'Especialista', '', 'Gestão e Negócios', ''),
(13, 'Rafael Baldim Marquez', 'Especialista', '22', 'Farmácia', 'rafael.marquez@etec.sp.gov.br'),
(14, 'Renê Guerreiro da Souza Cintra', 'Especialista', '27', 'Farmácia', ''),
(15, 'Ricardo Fassina Maioli', 'Especialista', '10 31 29', 'Tecnologia da Informação', 'ricardo.maioli2@etec.sp.gov.br'),
(16, 'Santo de Jesus Pelloso', 'Especialista', '27', 'Química', 'santo.pelloso@etec.sp.gov.br'),
(17, 'Sérgio Roberto Octaviano', 'Especialista', '', 'Gestão e Negócios', ''),
(18, 'Vicente Hideo Oyama', 'Especialista', '', '', ''),
(19, 'Bruno Zaneli Campanari', 'Licenciado', '10 31 27 16', 'Física/Química', 'zaneli93@gmail.com'),
(20, 'Mário André Gimenes Otoboni', 'Licenciado', '', '', 'mario.otoboni@etec.sp.gov.br'),
(21, 'Éder Aparecido de Sousa', 'Mestre', '31 24 11', 'Gestão e Negócios', 'eder.sousa@etec.sp.gov.br'),
(22, 'Éverton Henrique Gonçales Cardoso', 'Mestre', '10 31 27 16', 'Geografia', 'evertonhgcardoso@gmail.com'),
(23, 'José Cláudio Pecini', 'Mestre', '10 31 27 16', 'História/Sociologia e Filosofia', 'histjc@yahoo.com.br'),
(24, 'Leonardo Oliveira Buturi', 'Mestre', '10 31 27 16', 'Matemática/Física', 'leobuturi@gmail.com'),
(25, 'Marcelo Aparecido Decurcio', 'Mestre', '16', 'Letras: Português e Inglês', ''),
(26, 'Marinaldo Zago', 'Mestre', '10 27 16', 'Matemática', ''),
(27, 'Rodrigo da Silva Stecca', 'Mestre', '', 'Gestão e Negócios', 'rodrigostecca@etec.sp.gov.br'),
(28, 'Rodrigo Fernandes', 'Mestre', '31', 'Gestão e Negócios', 'rodrigo.fernandes1@etec.sp.gov.br'),
(29, 'Thiago Talon de Oliveira Carreira', 'Mestre', '31 24 11', 'Gestão e Negócios', ''),
(30, 'Mariani Armagni Ciciliati', 'Doutor', '', 'Química', ''),
(31, 'Adriana Ferreira Barbosa', 'Especialista', '10 31 27 16', 'Química', ''),
(32, 'Adriana Regina Pinto Tomaz', 'Especialista', '10 31 27', 'Tecnologia da Informação', 'adrianatmz@gmail.com'),
(33, 'Andréa Márcia Pinto Finote', 'Especialista', '', 'Enfermagem', ''),
(34, 'Andréia Maria Silva Duarte', 'Especialista', '', '', ''),
(35, 'Caroline Martins Sampaio', 'Especialista', '22', 'Tecnologia da Informação', ''),
(36, 'Célia Aparecida de Lima Pereira', 'Especialista', '10 31 27 16', 'Ciências Humanas e Sociais', ''),
(37, 'Cristiane Vanda dos Santos Marchan', 'Especialista', '10 29', 'Tecnologia da Informação', 'cristiane.vanda@etec.sp.gov.br'),
(38, 'Edelma Alencar Lima Jacob', 'Especialista', '22 27', 'Química', 'edelma.prof@gmail.com'),
(39, 'Fernanda Moreira Ferreira', 'Especialista', '31 11', 'Gestão e Negócios', ''),
(40, 'Liliane Oliveira Sakano', 'Especialista', '', 'Enfermagem', ''),
(41, 'Lucimara Alves de Aguiar Basso', 'Especialista', '10 31 27 16', 'Letras: Português e Inglês', 'lucimara.basso@etec.sp.gov.br'),
(42, 'Mara Regina Arenhardt Tomaz', 'Especialista', '', 'Segurança do Trabalho', 'mareartomaz@gmail.com'),
(43, 'Marielli Galheira Uranga Peixoto', 'Especialista', '10 31 27 24 11', 'Letras: Português e Inglês', ''),
(44, 'Marisa Castilho Mendes Penga', 'Especialista', '', 'Letras: Português e Inglês', 'mcastilho.penga@gmail.com'),
(45, 'Marla Penasso Brozulato Monarin', 'Especialista', '22 27', 'Farmácia', ''),
(46, 'Miriam de Oliveira Nascimento', 'Especialista', '', '', ''),
(47, 'Raquel Pereira de Souza', 'Especialista', '', '', ''),
(48, 'Regina Maria Bertolo Zupirolli', 'Especialista', '', 'Enfermagem', ''),
(49, 'Renata Ribeiro Pereira Vitor', 'Especialista', '', 'Enfermagem', ''),
(51, 'Rosângela de Siqueira Magdalena', 'Especialista', '27 29 11', 'Letras', ''),
(52, 'Tatiana Galassi', 'Especialista', '', 'Farmácia', ''),
(53, 'Viviane Pelloso Voznhaki', 'Especialista', '', '', ''),
(54, 'Zilda Lopes Mio', 'Especialista', '', 'Enfermagem', ''),
(55, 'Jaine Daniele Rodrigues de Souza Ribeiro', 'Especialista', '11', 'Gestão e Negócios', ''),
(56, 'Leila Ribeiro Bizuti', 'Licenciado', '10 31', 'Letras: Português e Inglês', ''),
(57, 'Mariana Pimenta Bernardes', 'Licenciado', '31', 'Geografia', ''),
(58, 'Paula Rived Garcia', 'Licenciado', '10 31 27 16', 'Educação Física', 'paula.rived@gmail.com'),
(59, 'Aline Bezerra da Silva', 'Mestre', '11', 'Gestão e Negócios', ''),
(60, 'Camila de Souza Prazeres', 'Mestre', '', 'Enfermagem', ''),
(61, 'Fernanda Cathusca Morelli Silva', 'Mestre', '27', 'Química', 'fermorelli.silva@gmail.com'),
(62, 'Fernanda Siquini Valenciano', 'Mestre', '10 31 27 16', 'Letras: Português e Inglês', ''),
(63, 'Franciele Facco de Carvalho', 'Mestre', '', 'Enfermagem', 'franfacco@yahoo.com.br'),
(64, 'Letícia Maria Galdino de Oliveira', 'Mestre', '10 29', 'Tecnologia da Informação', 'leticia.oliveira@etec.sp.gov.br'),
(65, 'Luciana Akemi Kimura', 'Mestre', '10 31 27 16', 'Biologia', ''),
(66, 'Rebeca Zuliani Galvão', 'Mestre', '22 27', 'Química', ''),
(67, 'Renata Luciana Coneglian Facco', 'Mestre', '', 'Enfermagem', ''),
(68, 'Rosângela de Carvalho Sufi', 'Mestre', '', 'Direito', ''),
(70, 'Simone Confortini Correia', 'Especialista', '10 31 27', 'Tecnologia da Informação', 'simone.confortini@etec.sp.gov.br'),
(71, 'Alessandro Ferreira da Costa', 'Especialista', '31', 'Gestão e Negócios - Ciências', ''),
(72, 'Daiane Barbosa Giroto', 'Licenciado', '31 27', 'Geografia', ''),
(73, 'Daniela Perez Guerrero', 'Mestre', '27', 'Farmácia - Agronomia', ''),
(74, 'Júlio César Ferrari', 'Especialista', '24', 'Gestão e Negócios', ''),
(75, 'Luiz Carlos Galvani', 'Especialista', '11', 'Gestão e Negócios', ''),
(76, 'Sandra Nogueira dos Santos', 'Mestre', '11', 'Gestão e Negócios', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
