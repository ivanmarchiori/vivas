<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function language($lang)
    {

        if ($lang == "br") {

            $language['Menu'] = "Menu";
            $language['Dashboard'] = "Dashboard";
            $language['Applications'] = "Aplicações";
            $language['Calendar'] = "Calendário";
            $language['Chat'] = "Chat";
            $language['Hot'] = "Hot";
            $language['Email'] = "Email";
            $language['Inbox'] = "Caixa de Entrada";
            $language['Read_Email'] = "Ler Email";
            $language['Ecommerce'] = "Ecommerce";
            $language['Products'] = "Produtos";
            $language['Product_Detail'] = "Detalhes";
            $language['Orders'] = "Pedidos";
            $language['Customers'] = "Clientes";
            $language['Cart'] = "Carrinhos";
            $language['Checkout'] = "Pagamento";
            $language['Shops'] = "Lojas";
            $language['Add_Product'] = "Adicionar Produto";
            $language['Invoices'] = "Faturas";
            $language['Invoice_List'] = "Lista de Faturas";
            $language['Invoice_Detail'] = "Detalhes da Fatura";
            $language['Contacts'] = "Contatos";
            $language['User_Grid'] = "Grade";
            $language['User_List'] = "Lista";
            $language['Profile'] = "Perfil";
            $language['Pages'] = "Paginas";
            $language['Authentication'] = "Autenticação";
            $language['Login'] = "Login";
            $language['Register'] = "Registrar";
            $language['Recover_Password'] = "Resgatar Senha";
            $language['Lock_Screen'] = "Tela de bloqueio";
            $language['Log_Out'] = "Sair";
            $language['Confirm_Mail'] = "Confirmar E-mail";
            $language['Email_Verification'] = "Verificação de e-mail";
            $language['Two_Step_Verification'] = "Verificação em duas etapas";
            $language['Utility'] = "Utilitários";
            $language['Starter_Page'] = "Página Inicial";
            $language['Maintenance'] = "Manutenção";
            $language['Coming_Soon'] = "Em breve";
            $language['Timeline'] = "Linha do Tempo";
            $language['FAQs'] = "FAQs";
            $language['Pricing'] = "Preços";
            $language['Error_404'] = "Error 404";
            $language['Error_500'] = "Error 500";
            $language['Vertical'] = "Vertical";
            $language['Components'] = "Componentes";
            $language['Bootstrap'] = "Bootstrap";
            $language['Alerts'] = "Alertas";
            $language['Buttons'] = "Botões";
            $language['Cards'] = "Cartões";
            $language['Carousel'] = "Carousel";
            $language['Dropdowns'] = "Dropdowns";
            $language['Grid'] = "Grades";
            $language['Images'] = "Imagens";
            $language['Modals'] = "Modais";
            $language['Offcanvas'] = "Offcanvas";
            $language['Placeholders'] = "Placeholders";
            $language['Progress_Bars'] = "Barra de Progress";
            $language['Tabs_n_Accordions'] = "Guias e Acordeons";
            $language['Typography'] = "Tipos de Letra";
            $language['Video'] = "Video";
            $language['General'] = "Geral";
            $language['Colors'] = "Cores";
            $language['Extended'] = "Extendida";
            $language['Lightbox'] = "Lightbox";
            $language['Range_Slider'] = "Controle deslizante";
            $language['SweetAlert_2'] = "SweetAlert 2";
            $language['Rating'] = "Avaliação";
            $language['Notifications'] = "Notificações";
            $language['Forms'] = "Formulários";
            $language['Basic_Elements'] = "Elementos Básicos";
            $language['Validation'] = "Validação";
            $language['Advanced_Plugins'] = "Plugins Avançados";
            $language['Editors'] = "Editores";
            $language['File_Upload'] = "Upload Arquivo";
            $language['Wizard'] = "Assistente";
            $language['Mask'] = "Mascaras";
            $language['Tables'] = "Tabelas";
            $language['Bootstrap_Basic'] = "Bootstrap";
            $language['Advance_Tables'] = "Tabelas Avançadas";
            $language['Charts'] = "Gráficos";
            $language['Apex'] = "Apex";
            $language['Chartjs'] = "Chartjs";
            $language['Icons'] = "Icones";
            $language['Feather'] = "Feather";
            $language['Boxicons'] = "Boxicons";
            $language['Material_Design'] = "Materiais";
            $language['Dripicons'] = "Dripicons";
            $language['Font_awesome'] = "Font awesome";
            $language['Maps'] = "Mapas";
            $language['Google'] = "Google";
            $language['Vector'] = "Vetor";
            $language['Leaflet'] = "Leaflet";
            $language['Multi_Level'] = "Multi Nivel";
            $language['Level_1_1'] = "Nivel 1.1";
            $language['Level_1_2'] = "Nivel 1.2";
            $language['Level_2_1'] = "Nivel 2.1";
            $language['Level_2_2'] = "Nivel 2.2";
            $language['Search_here'] = "Buscar aqui";
            $language['Notifications'] = "Notificações";
            $language['Mark_all_as_read'] = "Marcar tudo como lido";
            $language['Justin_Verduzco'] = "Nome Completo";
            $language['Your_task_changed_an_issue_from_In_Progress_to'] = "Sua tarefa alterou um problema de Em andamento para";
            $language['Review'] = "Revisão";
            $language['1_hours_ago'] = "1 hora atras";
            $language['New_order_has_been_placed'] = "Novo pedido foi feito";
            $language['Open_the_order_confirmation_or_shipment_confirmation'] = "Abra a confirmação do pedido ou confirmação de envio";
            $language['5_hours_ago'] = "5 horas atrás";
            $language['Your_item_is_shipped'] = "Seu item foi enviado";
            $language['Here_is_somthing_that_you_might_light_like_to_know'] = "Aqui está algo que você talvez gostaria de saber";
            $language['1_day_ago'] = "1 dia atrás";
            $language['Salena_Layfield'] = "Nome Completo";
            $language['Yay_Everything_worked'] = "Sim, tudo funcionou";
            $language['3_days_ago'] = "3 dias atrás";
            $language['View_All'] = "Ver tudo";

            $language['My_Account'] = "Minha Conta";
            $language['Chat'] = "Chat";
            $language['Support'] = "Suporte";
            $language['Settings'] = "Configurações";
            $language['Lock_screen'] = "Tela de bloqueio";
            $language['Logout'] = "Sair";
            $language['Apps'] = "Aplicativos";

            $language['Search'] = "Pesquisar...";
            $language['SeeMore'] = "Veja Mais";
            $language['MarkView'] = "Marcar como Lida";
            $language['new'] = "Novo";


            $language['YouareLoggedOut'] = "Desconectado com sucesso";
            $language['Thankyouforusing'] = "Obrigado por utilizar";
            $language['SignIn'] = "Iniciar Sessão";


            $language['SignIn'] = "Iniciar Sessão";
        }

        return $language;
    }
}
