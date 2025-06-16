<!-- Sidebar -->
<div :class="open ? 'w-64' : 'w-20'" class="bg-[#344356] text-white duration-300 flex flex-col">

    <!-- Logo e Botão -->
    <div class="flex items-center justify-between p-4">
        <h1 x-show="open" class="text-xl font-bold">2LP+ CRM</h1>
        <button @click="open = !open" class="text-white">
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Menu -->
    <nav class="flex-1 overflow-y-auto">
        <ul class="space-y-2 px-2">
            <!-- Painel de Controle -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Painel de Controle</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Resumo de Reservas do Dia</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Agenda de Tarefas Diária</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Status e Mapa de Ocupação</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Avisos Importantes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Outros</a></li>
                    </ul>
                </div>
            </li>

            <!-- Reservas -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Reservas</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Nova Reserva</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Reservas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Histórico de Reservas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Reservas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Reservas Canceladas e Reagendadas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Status de Quarto e Ocupação</a></li>
                    </ul>
                </div>
            </li>

            <!-- Check-in/Check-out -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Check-In / Check-Out</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Realizar Check-In</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Realizar Check-Out</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Pendências de Check-In/Out</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Check-In/Out</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Registrar Avaliações de Clientes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Avaliação dos Clientes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório da Duração Média das Estadias</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar No-Show (não comparecimento)</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de No-Show</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Histórico de Estadia</a></li>
                    </ul>
                </div>
            </li>

            <!-- Hóspedes/Clientes -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Hóspedes/Clientes</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar Hóspede (Cliente PF)</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar Empresa (Cliente PJ)</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Editar/Listar Hóspedes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Editar/Listar Empresas Clientes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar Preferencias do Cliente</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Preferencias do Cliente</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Pontuação de Fidelidade do Cliente</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Vincular Hóspede c/ Empresas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Editar/Listar Hóspede c/ Empresas</a></li>
                    </ul>
                </div>
            </li>

            <!-- Serviços e Pacotes Extras -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Serviços e Pacotes Extras</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Serviço Extra</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consutar/Incluir Serviço Extra</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Pacotes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar/Incluir Pacotes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Itens Frigobar</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Registrar Consumo Frigobar</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Serviços Extras</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Pacotes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Consumo e Perdas com Frigobar</a></li>
                    </ul>
                </div>
            </li>

            <!-- Quartos e CIA -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Quartos e CIA.</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar Quartos e Afins (Acomodações) </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Tipos e Padrões de Acomodações </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar a Descrição das Acomodações </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar detalhes das Acomodações </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Status de Quartos </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Ocupação e Preferencias </a></li>
                    </ul>
                </div>
            </li>

            <!-- Agenda e Eventos -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Agenda & Eventos</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Minha Agenda</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Agenda Corporativa</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Eventos</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Eventos</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Eventos </a></li>
                    </ul>
                </div>
            </li>

            <!-- Marketing -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Marketing</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Promoções</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Promoções</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Campanhas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Campanhas </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Comunicação e Alertas Interno </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Comunicação e Alertas Interno</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Comunicação e Alertas Externos</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Comunicação e Alertas Externos</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Enviar e Consultar Lembretes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Relacionamentos e Fidelidade Externos</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Relacionamentos e Fidelidade Internos</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Preferencias de Clientes</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Publicidades e Afins</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gestão de Apoio & Patrocinio</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Apoio & Patrocinio</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar SIM, P&D e Banco de Dados</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Comunicação e Alertas</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatórios de SIM SIM, P&D e Banco de Dados</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Pontos de Fidelidade</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Relacinamentos e Fidelidade</a></li>
                    </ul>
                </div>
            </li>

            <!-- Financeiro -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Financeiro</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Planos de Assinatura CRM</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Planos de Assinatura CRM </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Configurar e Gerenciar Formas de Pagamento</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Consultar Formas de Pagamento</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar Descontos e Beneficios Comerciais</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Descontos e Beneficios Comerciais</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Descontos e Beneficios Comerciais </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar Taxa de no-show</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Faturamento por cliente (PF ou PJ)</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Controle de Receita</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Receita</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Controle Contábil e Financeiro</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório Financeiro e Contábil</a></li>
                    </ul>
                </div>
            </li>

            <!-- Relatórios -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Relatórios</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Listar todos os relatórios </a></li>
                    </ul>
                </div>
            </li>

            <!-- Dados da Empresa -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Dados da Empresa</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Dados Cadastrais</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Planos Ativos CRM </a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Acompanhar Faturas e Pagamentos CRM</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Trocar Senha de Acesso</a></li>
                    </ul>
                </div>
            </li>

            <!-- Configuração do Sistema -->
            <li x-data="{ openSub: false }">
                <div>
                    <button
                        @click="if(open) openSub = !openSub"
                        class="flex items-center w-full p-2 hover:bg-[#52658c] rounded-lg">
                        <span class="ml-3 font-bold" x-show="open">Configurações</span>
                        <svg x-show="open" :class="{'rotate-180': openSub}" class="w-4 h-4 ml-auto transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open && openSub" x-collapse class="pl-6 space-y-1">
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar permissões de usuários</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Cadastrar/Editar Usuários</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Trocar Minha Senha (Usuário)</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Personalizar Layout/Aparência CRM</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Campos e Tabelas Auxiliares</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Integrações</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Gerenciar Backup e Restauração de Dados</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Configurar Dashboard</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">Relatório de Logs de Auditoria</a></li>
                        <li><a href="#" class="block p-2 hover:bg-[#52658c] rounded-lg">SUPORTE & AJUDA</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>