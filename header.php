</head>
<body>
	<header id="header">
		<div class="menu2" id="menu">
			<div class="container">
				<div class="barra">
					<div class="botoes">
						<div class="menu-trigger" id="menu-trigger">
							<input type="checkbox" id="check">
							<label id="icone" class="icone" for="check"></label>
							<span></span>
						</div>
						<a class="logo-principal" href="index.php" alt="Sebrae Minas Gerais" title="Sebrae Minas Gerais"><img src="./assets/images/Sebrae.png" alt="Sebrae Minas Gerais"></a>
					</div>
					
					<div class="caixa-modais">
						<div class="corporativas box">
							<button onclick="document.getElementById('corporativas').style.display='block'">
								INFORMAÇÕES<br>CORPORATIVAS
							</button>
						</div>
						<div class="relatorio box">
							<button onclick="document.getElementById('relatorio').style.display='block'">
								SOBRE O <br>RELATÓRIO
							</button>
						</div>
						<div class="pdf box">
							<a href="" download="Relatório 2021">								
								<svg xmlns="http://www.w3.org/2000/svg" width="16.65" height="16.725" viewBox="0 0 16.65 16.725">
								  <g id="Grupo_22" data-name="Grupo 22" transform="translate(0 44.928)">
								    <g id="Grupo_15" data-name="Grupo 15" transform="translate(1.351 -29.875)">
								      <path id="Caminho_11" data-name="Caminho 11" d="M-.611,0-.973,1.673h12L11.391,0Z" transform="translate(0.973)" fill="#3fbaff"/>
								    </g>
								    <g id="Grupo_16" data-name="Grupo 16" transform="translate(2.927 -44.928)">
								      <path id="Caminho_12" data-name="Caminho 12" d="M-.611,0-.974,1.673h12L11.391,0Z" transform="translate(0.974)" fill="#3fbaff"/>
								    </g>
								    <g id="Grupo_17" data-name="Grupo 17" transform="translate(11.656 -43.255)">
								      <path id="Caminho_13" data-name="Caminho 13" d="M-5.527,0-8.8,15.051h1.718L-3.81,0Z" transform="translate(8.804)" fill="#3fbaff"/>
								    </g>
								    <g id="Grupo_18" data-name="Grupo 18" transform="translate(0 -44.927)">
								      <path id="Caminho_14" data-name="Caminho 14" d="M-5.527,0-8.8,15.051h1.718L-3.81,0Z" transform="translate(8.804)" fill="#3fbaff"/>
								    </g>
								    <g id="Grupo_19" data-name="Grupo 19" transform="translate(5.617 -41.574)">
								      <path id="Caminho_15" data-name="Caminho 15" d="M-.614,0H6.251L5.887,1.673H-.978Z" transform="translate(0.978)" fill="#3fbaff"/>
								    </g>
								    <g id="Grupo_20" data-name="Grupo 20" transform="translate(4.899 -38.238)">
								      <path id="Caminho_16" data-name="Caminho 16" d="M-.614,0H6.251L5.887,1.673H-.978Z" transform="translate(0.978)" fill="#3fbaff"/>
								    </g>
								    <g id="Grupo_21" data-name="Grupo 21" transform="translate(4.169 -34.884)">
								      <path id="Caminho_17" data-name="Caminho 17" d="M-.614,0H6.251L5.887,1.673H-.978Z" transform="translate(0.978)" fill="#3fbaff"/>
								    </g>
								  </g>
								</svg>
								<p>PDF<br>Relatório<span>2021</span></p>
							</a>
						</div>
					</div>
					<div class="conteudo" id="menu-hidde">
						<nav>
							<ul>
								<li><a href="mensagem-da-administracao.php">Mensagem da Administração</a></li>
								<li><a href="sobre-relatorio.php">Sobre o Relatório</a></li>
								<li><a href="">Informações Corporativas</a></li>
								<li><a href="quem-somos.php">Quem Somos</a></li>
								<ul class="sub-menu">
									<li><a href="governanca-corporativa.php">Governança Corporativa</a></li>
									<li><a href="atendimento-qualidade.php">Atendimento de Qualidade</a></li>
								</ul>
								<li><a href="planejamento-estrategico.php">Planejamento Estratégico</a></li>
								<ul class="sub-menu">
									<li><a href="engajamento-stakeholders.php">Engajamento de Stakeholders</a></li>
									<li><a href="nossa-gente.php">Nossa Gente</a></li>
								</ul>
								<li><a href="desempenho-ano.php">Desempenho do Ano</a></li>
								<ul class="sub-menu">
									<li><a href="resultados-financeiros.php">Resultados Financeiros</a></li>
									<li><a href="responsabilidade-socioambiental.php">Responsabilidade socioambiental</a></li>
								</ul>
							</ul>							
						</nav>
						<a class="botao" href=""><span>SUMÁRIO EXECUTIVO</span></a>
						<a class="botao" href=""><span>PDF DO RELATÓRIO 2021</span></a>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<div id="corporativas" class="w3-modal w3-animate-opacity modal-corporativas">
		<div class="w3-modal-content w3-card-4">
			<header class="w3-container"> 
				<span onclick="document.getElementById('corporativas').style.display='none'" 
				class="w3-button w3-large w3-display-topright">&times;</span>
				<div>
					<img src="./assets/images/titulo-modal.png">
					<h2>Sobre o Relatório</h2>					
				</div>
				<p>Seguindo as diretrizes da GRI, o conteúdo desta publicação foi baseado nos temas materiais do Sebrae Minas.</p>
			</header>
			<div class="w3-container texto">
				<p>O Relatório de Sustentabilidade do Sebrae Minas é uma publicação anual que apresenta, de forma transparente e objetiva, os principais resultados alcançados de 1º de janeiro a 31 de dezembro de 2021 nos aspectos econômico, social e ambiental. Seu conteúdo foi elaborado seguindo as diretrizes Standards da Global Reporting Initiative (GRI), organização não-governamental com padrões mundialmente respeitados para análises de desempenho corporativo. <span>RI 102-50, 102-52</span></p>
				<p>Dentro das dimensões apontadas pela metodologia GRI, o relatório aborda o quanto o Sebrae Minas teve que se adequar e superar metas dentro de um curto espaço de tempo por causa da pandemia de Covid-19. Depois de um grande impacto em 2020, ano do auge da crise de saúde e econômica mundial, 2021 ainda permaneceu atípico e bastante desafiador. Ainda assim, o Sebrae Minas conseguiu se posicionar como serviço essencial dentro da sociedade e ganhou mais prestígio no Suporte Empresarial e Desenvolvimento Econômico, suas duas esferas de atuação.</p>
				<p> O relatório presta contas aos públicos com que a instituição se relaciona, a respeito de sua gestão e das ações do ano. Grandes mudanças, como a migração de cursos, consultorias e capacitações para o formato digital; a criação de novos canais para atendimento ao cliente dentro das iniciativas de inovação; e a convivência do plano emergencial com o plano estratégico 2023 serão detalhados neste documento.</p> 
				<p>Também estão incluídos dados sobre governança corporativa, compliance, recursos humanos e os destaques dentro dos temas do Desenvolvimento Econômico Local e Responsabilidade Socioambiental.</p>
				<p> Já o desempenho financeiro se baseia nas demonstrações contábeis e notas explicativas do Sebrae Minas, que em 2021 foram verificadas externamente pela PricewaterhouseCoopers Auditores Independentes.</p>
				<p> Para mais informações, críticas ou sugestões sobre o Relatório de Sustentabilidade do Sebrae Minas escreva para <a href="malito:ouvidoria@sebraemg.com.br.">ouvidoria@sebraemg.com.br.</a><span>7GRI 102-53, 102-56</span>
			</div>
		</div>
	</div>
	<div id="relatorio" class="w3-modal w3-animate-opacity">
		<div class="w3-modal-content w3-card-4">
			<header class="w3-container"> 
				<span onclick="document.getElementById('relatorio').style.display='none'" 
				class="w3-button w3-large w3-display-topright">&times;</span>
				<div>
					<img src="./assets/images/titulo-modal2.png">
					<h2>Informações Corporativas</h2>
				</div>
				<p>Estrutura conta com Conselho Deliberativo Estadual (CDE), Conselho Fiscal e Diretoria Executiva.</p>
			</header>
			<div class="w3-container texto">
				<p>Com 15 associados instituidores, sendo que a sua maioria são entidades privadas que não respondem isolada ou subsidiariamente pelas obrigações assumidas pelo Sebrae Minas, a estrutura básica da entidade é composta por três órgãos de governança: o Conselho Deliberativo Estadual (CDE), o Conselho Fiscal e a Diretoria Executiva.</p>

				<h4>Conselho Deliberativo Estadual</h4> 
				<h5>GRI 103-2, 103-3 | 202</h5>

				<p>Órgão colegiado de direção superior, o CDE é composto por 15 conselheiros titulares e 15 suplentes indicados pelas instituições associadas para mandatos de quatro anos, sem remuneração, sendo permitida a recondução. Um dos 15 membros titulares é eleito presidente pelos demais em reunião especialmente convocada para esse fim com a presença mínima de oito conselheiros. <span>GRI 102-24</span></p>
				<p>O CDE realiza reuniões ordinárias mensais e extraordinárias quando for necessário. Entre as atribuições do CDE destacam-se:</p>
				<ul>
					<li>* Eleger a Diretoria-Executiva do Sebrae Minas; </li>
					<li>* Eleger, dentre os seus titulares, o seu Presidente; </li>
					<li>* Eleger os membros titulares e suplentes </li>
					<li>* do Conselho Fiscal; </li>
					<li>* Fixar a remuneração dos membros da </li>
					<li>* Diretoria Executiva; </li>
					<li>* Decidir sobre políticas e diretrizes em consonância com as deliberações do Conselho </li>
					<li>* Deliberativo Nacional. </li>
					<li>* Aprovar o Plano Plurianual e o Orçamento Anual;</li> 
					<li>* Aprovar as prestações de contas do Sebrae Minas.</li> 
				</ul>

				<h4>Conselho Fiscal</h4> 

				<p>Órgão de assessoramento do CDE para assuntos de gestão contábil, patrimonial e financeira, o Conselho Fiscal é composto por três membros efetivos e três suplentes eleitos pelo próprio Conselho Deliberativo para mandatos de dois anos consecutivos, sem remuneração, permitida a recondução. É vedada a participação no Conselho Fiscal de empregados do Sebrae Minas, membros de outros colegiados da entidade ou que seja indicada pelo associado que detenha a Presidência do CDE. <span>GRI 102-25</span></p>

				<p>Com reuniões ordinárias a cada trimestre ou extraordinárias sempre que convocado pelo seu Presidente ou pelo Presidente do CDE, compete ao Conselho Fiscal:</p>
				<ul>
					<li>* Examinar e emitir parecer sobre as demonstrações financeiras e prestações de contas anuais do Sebrae Minas; </li>
					<li>* Emitir pareceres sobre balancetes de verificação ou realizar exames específicos sempre que o CDE solicitar;</li> 
					<li>* Emitir parecer, quando solicitado pelo CDE, sobre a alienação ou oneração de bens imóveis.</li>
				</ul>

				<h4>Diretoria Executiva</h4> 
	 			<p>Órgão colegiado de natureza executiva, é responsável pela gestão administrativa e técnica do Sebrae Minas. É formada pela Superintendência, Diretoria Técnica e Diretoria de Operações, eleita pelo CDE para mandatos de dois anos. O Superintendente é o principal executivo da organização e responde pelas dez unidades de gestão e suporte. O Diretor Técnico responde pelas sete unidades que desenvolvem soluções, produtos e serviços para o mercado. Já o Diretor de Operações responde pelas dez unidades regionais e de relacionamento com clientes. GRI 202-2</p>

	 			<p>Reunindo-se ordinariamente duas vezes por mês e, extraordinariamente, quando convocada pelo Diretor Superintendente, a Diretoria é encarregada de fazer cumprir o Estatuto, o Plano Plurianual, o Direcionamento Estratégico, as Diretrizes Orçamentárias, bem como as políticas, diretrizes, prioridades aprovadas pelo CDE e as resoluções do Conselho Deliberativo Nacional (CDN) e da Diretoria Executiva do Sebrae Nacional.</p> 

	 			<h4>Composição da Diretoria Executiva do Sebrae Minas<h4>
 				<h5>em 31/12/2021 102-22, 202-21</h5>
 				<div>
	 				<p>Diretor-Superintendente:</p> 
	 				<p>Afonso Maria Rocha</p>
 				</div>
 				<div>  
 					<p>Diretor Técnico:</p> 
 					<p>João Cruz Reis Filho</p> 
 				</div>
 				<div> 
	 				<p>Diretor de Operações:</p>  
	 				<p>Marden Márcio Magalhães</p>
 				</div>
			</div>
		</div>
	</div>		
	<script type="text/javascript">
		$(document).ready(function($) {			
			$('.icone').click(function() {				
				$('.icone.active').removeClass("active"); //aqui removemos a class do item anteriormente clicado para que possamos adicionar ao item clicado					
				$(this).addClass("active");	//aqui adicionamos a class ao item clicado					
			});
		});
	</script>