<?php
  session_start();  
  // phpinfo()
  require_once('../../model/conexao.php');
  require_once('../../Controller/listarPaciente.php');

  // $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['idPaciente'];
  require_once('../../Controller/pacienteInfo.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vida Leve</title>
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../css/telaPaciente.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
  <section class="template">
    <?php
      include_once ('./templates/cabecalho.php'); 
    ?>
    <sidenav class="menu">
      <div class="logo">
        <img src="../img/logo-icone.svg" />
        <h2>Vida Leve</h2>
      </div>
      <div class="topicos">
        <div class="topicosSuperiores">
          <a href="./pacientePrincipal.php" class="icone ">
            <svg width="15" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M6 2C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4C4 4.53043 4.21071 5.03914 4.58579 5.41421C4.96086 5.78929 5.46957 6 6 6C6.53043 6 7.03914 5.78929 7.41421 5.41421C7.78929 5.03914 8 4.53043 8 4C8 3.46957 7.78929 2.96086 7.41421 2.58579C7.03914 2.21071 6.53043 2 6 2ZM2.5 12.5C2.36739 12.5 2.24021 12.5527 2.14645 12.6464C2.05268 12.7402 2 12.8674 2 13C2 13.1326 2.05268 13.2598 2.14645 13.3536C2.24021 13.4473 2.36739 13.5 2.5 13.5H9.5C9.63261 13.5 9.75979 13.4473 9.85355 13.3536C9.94732 13.2598 10 13.1326 10 13C10 12.8674 9.94732 12.7402 9.85355 12.6464C9.75979 12.5527 9.63261 12.5 9.5 12.5H2.5ZM0 2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H10C10.5304 0 11.0391 0.210714 11.4142 0.585786C11.7893 0.960859 12 1.46957 12 2V14C12 14.5304 11.7893 15.0391 11.4142 15.4142C11.0391 15.7893 10.5304 16 10 16H2C1.46957 16 0.960859 15.7893 0.585786 15.4142C0.210714 15.0391 0 14.5304 0 14V2ZM10 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10H3V8C3 7.73478 3.10536 7.48043 3.29289 7.29289C3.48043 7.10536 3.73478 7 4 7H8C8.26522 7 8.51957 7.10536 8.70711 7.29289C8.89464 7.48043 9 7.73478 9 8V10H11V2C11 1.73478 10.8946 1.48043 10.7071 1.29289C10.5196 1.10536 10.2652 1 10 1ZM1 11V14C1 14.2652 1.10536 14.5196 1.29289 14.7071C1.48043 14.8946 1.73478 15 2 15H10C10.2652 15 10.5196 14.8946 10.7071 14.7071C10.8946 14.5196 11 14.2652 11 14V11H1Z"
                fill="#71839B" />
            </svg>

            <h3>Pacientes</h3>
          </a>
            
          
          <a href="./pacienteEnfermagem.php" class="icone">
            <svg
              width=" 20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M-2 3.25291L0.886 13.3679C3.624 12.9649 6.785 12.7349 9.999 12.7349C13.213 12.7349 16.374 12.9649 19.466 13.4099L19.113 13.3679L21.999 3.25291C12.497 -0.972088 6.858 -1.19509 -2 3.25291ZM12.918 7.52891H10.847V9.59991H9.161V7.52891H7.09V5.84291H9.161V3.77091H10.847V5.84291H12.918V7.52891Z"
            fill="#71839B" />
            </svg>

            <h3>Enfermagem</h3>
          </a>
          
          
          <a href="./pacienteFisioterapia.php" class="icone">
            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196 15.021 0 14.55 0 14V13C0 12.45 0.196 11.9793 0.588 11.588C0.979333 11.196 1.45 11 2 11C2.55 11 3.02067 11.196 3.412 11.588C3.804 11.9793 4 12.45 4 13V14C4 14.55 3.804 15.021 3.412 15.413C3.02067 15.8043 2.55 16 2 16ZM19.05 16H17.5C17.3333 16 17.2 15.9373 17.1 15.812C17 15.6873 16.9667 15.5417 17 15.375L17.275 14.3C17.3083 14.1667 17.375 14.0627 17.475 13.988C17.575 13.9127 17.6917 13.8917 17.825 13.925L19.175 14.125C19.4083 14.1583 19.6043 14.2627 19.763 14.438C19.921 14.6127 20 14.8167 20 15.05C20 15.3167 19.9083 15.5417 19.725 15.725C19.5417 15.9083 19.3167 16 19.05 16ZM15.35 15.65L12.5 14.7C12.3667 14.65 12.2667 14.5583 12.2 14.425C12.1333 14.2917 12.1333 14.1583 12.2 14.025L12.95 12.3C13.0167 12.1667 13.121 12.0707 13.263 12.012C13.4043 11.954 13.5417 11.9667 13.675 12.05L16.075 13.45C16.175 13.5 16.246 13.575 16.288 13.675C16.3293 13.775 16.3333 13.8833 16.3 14L16 15.3C15.9667 15.4333 15.8833 15.5377 15.75 15.613C15.6167 15.6877 15.4833 15.7 15.35 15.65ZM10.7 13.9L8.75 13.4C8.51667 13.3333 8.33333 13.2127 8.2 13.038C8.06667 12.8627 8 12.6583 8 12.425V11.5C8 11.1167 8.06667 10.7583 8.2 10.425C8.33333 10.0917 8.55833 9.825 8.875 9.625C8.95833 9.575 9.04167 9.54567 9.125 9.537C9.20833 9.529 9.29167 9.55 9.375 9.6L11.925 11C12.0417 11.0667 12.121 11.1623 12.163 11.287C12.2043 11.4123 12.2 11.5333 12.15 11.65L11.275 13.625C11.225 13.7417 11.146 13.825 11.038 13.875C10.9293 13.925 10.8167 13.9333 10.7 13.9ZM5.45 13C5.31667 13 5.20833 12.9623 5.125 12.887C5.04167 12.8123 4.99167 12.7167 4.975 12.6C4.85833 11.85 4.521 11.2293 3.963 10.738C3.40433 10.246 2.75 10 2 10H1.5C1.36667 10 1.25 9.95 1.15 9.85C1.05 9.75 1 9.63333 1 9.5C1 9.36667 1.05 9.25 1.15 9.15C1.25 9.05 1.36667 9 1.5 9H2.4C2.73333 9 3.05 8.95833 3.35 8.875C3.65 8.79167 3.94167 8.65833 4.225 8.475C4.30833 8.425 4.4 8.4 4.5 8.4C4.6 8.4 4.69167 8.425 4.775 8.475C5.10833 8.675 5.46667 8.81233 5.85 8.887C6.23333 8.96233 6.61667 9 7 9C7.2 9 7.34167 9.104 7.425 9.312C7.50833 9.52067 7.48333 9.725 7.35 9.925C7.2 10.1583 7.104 10.4083 7.062 10.675C7.02067 10.9417 7 11.2167 7 11.5V12.5C7 12.6333 6.95 12.75 6.85 12.85C6.75 12.95 6.63333 13 6.5 13H5.45ZM2.45 8C1.75 8 1.16667 7.77067 0.7 7.312C0.233333 6.854 0 6.28333 0 5.6C0 5.28333 0.0583333 4.975 0.175 4.675C0.291667 4.375 0.466667 4.10833 0.7 3.875L2 2.575V0H4V2.6C4 2.86667 3.946 3.12067 3.838 3.362C3.72933 3.604 3.58333 3.81667 3.4 4L2.125 5.3C2.09167 5.33333 2.06233 5.375 2.037 5.425C2.01233 5.475 2 5.525 2 5.575C2 5.69167 2.04167 5.79167 2.125 5.875C2.20833 5.95833 2.30833 6 2.425 6C2.55833 6 2.7 5.925 2.85 5.775C3.08333 5.575 3.33767 5.41233 3.613 5.287C3.88767 5.16233 4.18333 5.1 4.5 5.1C4.81667 5.1 5.11267 5.16233 5.388 5.287C5.66267 5.41233 5.91667 5.575 6.15 5.775L6.35 5.925C6.41667 5.975 6.49167 6 6.575 6C6.69167 6 6.79167 5.95833 6.875 5.875C6.95833 5.79167 7 5.69167 7 5.575C7 5.525 6.98767 5.475 6.963 5.425C6.93767 5.375 6.90833 5.33333 6.875 5.3L5.6 4C5.41667 3.81667 5.27067 3.604 5.162 3.362C5.054 3.12067 5 2.86667 5 2.6V0H7V2.575L8.3 3.875C8.53333 4.10833 8.70833 4.37067 8.825 4.662C8.94167 4.954 9 5.25833 9 5.575C9 6.25833 8.76667 6.83333 8.3 7.3C7.83333 7.76667 7.25 8 6.55 8C6.23333 8 5.93333 7.93333 5.65 7.8C5.36667 7.66667 5.10833 7.5 4.875 7.3C4.80833 7.25 4.75 7.204 4.7 7.162C4.65 7.12067 4.58333 7.1 4.5 7.1C4.38333 7.1 4.25833 7.16667 4.125 7.3C3.89167 7.5 3.62933 7.66233 3.338 7.787C3.046 7.91233 2.75 7.98333 2.45 8Z"
                fill="#71839B" />
            </svg>

            <h3>Fisioterapia</h3>            
          </a>

          <a href="./pacienteBiomedicina.php" class="icone ">
            <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2 17C0.9 17 0 17.9 0 19H14C14 17.9 13.1 17 12 17H8V15H11C12.1 15 13 14.1 13 13H5C3.34 13 2 11.66 2 10C2 8.91 2.59 7.96 3.46 7.44C3.17 7.03 3 6.54 3 6C3 5.79 3.04 5.58 3.09 5.38C2.17642 5.75906 1.39547 6.40006 0.845587 7.22222C0.295702 8.04437 0.00147995 9.01091 0 10C0 12.76 2.24 15 5 15V17H2Z"
                fill="#71839B" />
              <path
                d="M5.56 3.51C6.91 3.54 8 4.64 8 6C8 6.75 7.67 7.41 7.15 7.87L7.74 9.49L8.68 9.15L9.02 10.09L10.9 9.41L10.56 8.47L11.5 8.13L8.76 0.6L7.82 0.94L7.48 0L5.6 0.68L5.94 1.62L5 1.97L5.56 3.51V3.51Z"
                fill="#71839B" />
              <path
                d="M5.5 7.5C6.32843 7.5 7 6.82843 7 6C7 5.17157 6.32843 4.5 5.5 4.5C4.67157 4.5 4 5.17157 4 6C4 6.82843 4.67157 7.5 5.5 7.5Z"
                fill="#71839B" />
            </svg>

            <h3>Biomedicina</h3>
          </a>

          <a href="./pacientePsicologia.php" class="icone ">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M0 -2C-0.530433 -2 -1.03914 -1.78929 -1.41421 -1.41421C-1.78929 -1.03914 -2 -0.530433 -2 0V20C-2 20.5304 -1.78929 21.0391 -1.41421 21.4142C-1.03914 21.7893 -0.530433 22 0 22H3.59267V14.508C1.56333 12.9913 0 10.948 0 8.3C0 6.09867 0.918667 3.98733 2.55333 2.43133C4.18933 0.874 6.40667 0 8.72 0C10.4803 -0.00314903 12.2217 0.361769 13.8327 1.07133C15.0825 1.56843 16.1867 2.37308 17.0427 3.41067C17.8081 4.47781 18.2361 5.74988 18.2713 7.06267C18.278 7.36267 18.274 7.64667 18.27 7.92133C18.2553 8.89267 18.2433 9.748 18.7307 10.7587C18.7307 10.7587 20.1733 12.0567 19.984 13.098C19.7933 14.1393 17.9147 14.426 17.9147 14.426C17.9147 20.032 10.7813 17.6927 10.7813 17.6927V22H20C20.5304 22 21.0391 21.7893 21.4142 21.4142C21.7893 21.0391 22 20.5304 22 20V0C22 -0.530433 21.7893 -1.03914 21.4142 -1.41421C21.0391 -1.78929 20.5304 -2 20 -2H0Z"
                  fill="#71839B" />
                <path
                  d="M11.5134 8.97C11.9421 8.97 11.8061 8.84333 12.1607 8.608C12.5229 8.84401 12.9471 8.96699 13.3794 8.96133L14.7567 8.474C15.1425 8.16634 15.4093 7.7341 15.5114 7.25133C15.6114 6.77133 15.5394 6.27267 15.3074 5.83867C15.0716 5.40129 14.693 5.05798 14.2347 4.866C14.1273 4.39875 13.8617 3.98303 13.4827 3.68933L12.1381 3.23133H11.9867C11.6834 2.80372 11.2348 2.50111 10.7247 2.38L8.39805 2.222C7.92105 2.25974 7.46989 2.45403 7.11472 2.77467C6.83162 2.70748 6.53794 2.69751 6.25094 2.74537C5.96393 2.79322 5.68938 2.89793 5.44339 3.05333C5.09672 3.27333 4.82339 3.58533 4.65539 3.95333L3.55939 4.708C3.28788 5.06484 3.14103 5.50095 3.14139 5.94933C3.13872 6.136 3.16405 6.322 3.21672 6.50133C2.9096 6.89171 2.75487 7.38043 2.78136 7.87643C2.80785 8.37244 3.01376 8.84189 3.36072 9.19733C3.39072 9.57733 3.52739 9.94267 3.75539 10.2533C3.98595 10.5655 4.29704 10.8091 4.65539 10.958C5.07005 11.2113 5.42205 11.5513 5.68339 11.9547C5.94539 12.3573 6.05339 12.812 6.11139 13.2853H8.39805V11.076C8.39779 10.6823 8.51047 10.2969 8.72272 9.96533C8.93539 9.632 9.05472 9.36333 9.41605 9.19C9.7534 9.06482 10.0586 8.866 10.3094 8.608C10.6662 8.84438 11.0847 8.9703 11.5127 8.97H11.5134ZM15.5554 10.8333C15.5554 11.0543 15.4676 11.2663 15.3113 11.4226C15.155 11.5789 14.9431 11.6667 14.7221 11.6667C14.501 11.6667 14.2891 11.5789 14.1328 11.4226C13.9765 11.2663 13.8887 11.0543 13.8887 10.8333C13.8887 10.6123 13.9765 10.4004 14.1328 10.2441C14.2891 10.0878 14.501 10 14.7221 10C14.9431 10 15.155 10.0878 15.3113 10.2441C15.4676 10.4004 15.5554 10.6123 15.5554 10.8333Z"
                  fill="#71839B" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M8.33333 15.5553H6.11133V14.222H8.33333V15.5553ZM8.33333 17.778H6.11133V16.4447H8.33333V17.778ZM8.33333 20H6.11133V18.6667H8.33333V20Z"
                  fill="#71839B" />
            </svg>
  
            <h3>Psicologia</h3>
          </a>

          <a href="./pacienteFarmacia.php" class="icone">
            <svg width="20" height="7" viewBox="0 0 20 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.0637 0H3.93717C1.77173 0 0 1.49882 0 3.5C0 5.50118 1.77173 7 3.93717 7H16.0637C18.2283 7 20 5.50076 20 3.5C20 1.49882 18.2283 0 16.0637 0ZM16.0649 6.17647H10.0524V0.823529H16.0649C17.6616 0.823529 18.9692 2.02382 18.9692 3.5C18.9692 4.97618 17.662 6.17647 16.0649 6.17647Z"
                fill="#71839B" />
            </svg>

            <h3>Farmácia</h3>

          </a>

          <a href="./pacienteEdFisica.php" class="icone icone-selecionado">
            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11.5 4C12.3284 4 13 3.10457 13 2C13 0.89543 12.3284 0 11.5 0C10.6716 0 10 0.89543 10 2C10 3.10457 10.6716 4 11.5 4Z"
                fill="#71839B" />
              <path
                d="M10.5068 7.82436C10.6956 8.09465 10.9664 8.30257 11.2824 8.4199C11.5984 8.53722 11.9443 8.55827 12.2732 8.48018L15 7.82515L14.6028 6.29226L11.876 6.94729L10.742 5.31406C10.4997 4.96526 10.1237 4.72269 9.69602 4.63928L6.53336 4.03086C6.17955 3.96264 5.8122 4.00823 5.48805 4.16061C5.1639 4.31299 4.90097 4.56367 4.73987 4.87395L3.37646 7.49408L4.8476 8.20126L6.21101 5.58034L7.82852 5.89166L3.64618 12.5897H0V14.17H3.64618C4.22016 14.17 4.76043 13.8761 5.05647 13.4028L6.63368 10.8775L10.8843 11.6945L12.3776 16L13.9367 15.4998L12.4442 11.1951C12.3521 10.9308 12.1891 10.6945 11.9717 10.51C11.7543 10.3256 11.4901 10.1994 11.2058 10.1442L8.70676 9.66461L10.1639 7.33052L10.5068 7.82436Z"
                fill="#71839B" />
            </svg>

            <h3>Ed. Física</h3>
          </a>

          <a href="./pacienteNutricao.php" class="icone">
            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0.89373 4.02531C0.401923 3.57514 0.066161 2.84488 0.000411292 1.66533C-0.00213202 1.60803 0.00714072 1.55082 0.0276529 1.49725C0.0481652 1.44368 0.0794784 1.39491 0.119645 1.35396C0.159812 1.31301 0.207973 1.28077 0.261134 1.25923C0.314295 1.23769 0.37132 1.22731 0.428661 1.22875C1.16287 1.2419 1.72524 1.29187 2.15481 1.41855C2.33891 0.941208 2.70579 0.491042 3.2559 0.079449C3.32503 0.027867 3.40897 0 3.49523 0C3.58148 0 3.66542 0.027867 3.73455 0.079449C4.28948 0.49411 4.65768 0.94866 4.84046 1.43039C5.28274 1.28135 5.8495 1.2384 6.56311 1.22788C6.62042 1.22661 6.67737 1.23715 6.73044 1.25882C6.78351 1.2805 6.83155 1.31285 6.87159 1.35387C6.91163 1.3949 6.9428 1.44372 6.96318 1.49729C6.98356 1.55087 6.9927 1.60807 6.99004 1.66533C6.92429 2.84488 6.58853 3.57514 6.09672 4.02487C6.33693 4.20415 6.47632 4.50396 6.42547 4.82877C6.24267 5.97235 6.02207 7.10956 5.76403 8.23855H3.0569V9.11521H5.55757C5.19028 10.6249 4.75768 12.1179 4.26099 13.5901C4.21056 13.7539 4.10898 13.8971 3.97116 13.9989C3.83334 14.1006 3.66654 14.1555 3.49523 14.1555C3.32391 14.1555 3.15711 14.1006 3.01929 13.9989C2.88147 13.8971 2.77989 13.7539 2.72946 13.5901C2.52258 12.9789 2.32734 12.3638 2.14385 11.7452H3.0569V10.8685H1.89137C1.47671 9.38215 1.16813 8.03253 0.944138 6.92355H2.61856V6.04689H0.774504C0.686838 5.5713 0.61802 5.16146 0.56542 4.82833C0.541179 4.67724 0.558988 4.52239 0.616897 4.38075C0.674806 4.23911 0.770581 4.11614 0.89373 4.02531ZM4.02079 1.74116L4.31973 2.53016L5.11968 2.26102C5.34016 2.18695 5.63867 2.14267 6.06385 2.12076C5.93366 2.96761 5.62026 3.32529 5.33403 3.51027C4.92594 3.77414 4.33112 3.85436 3.50838 3.85523H3.48208C2.65933 3.85436 2.06451 3.77414 1.65643 3.50983C1.37063 3.32529 1.05767 2.96805 0.927043 2.12295C1.36581 2.14706 1.67791 2.19177 1.90671 2.25927L2.68168 2.48808L2.97274 1.73415C3.05602 1.51718 3.21776 1.2739 3.49523 1.01792C3.77576 1.27653 3.93794 1.52244 4.02079 1.74116ZM12.5718 2.41181C11.7069 3.27664 11.6228 4.4838 12.1089 5.62039C14.2365 4.22782 16.6452 5.95046 16.6452 8.67688C16.6452 11.0978 14.4864 13.0602 11.8235 13.0602C9.16066 13.0602 7.00188 11.0978 7.00188 8.67688C7.00188 6.13806 9.09052 4.4689 11.0959 5.37624C10.7536 4.14892 10.9306 2.81288 11.952 1.79201L12.5718 2.41181ZM15.317 9.65962C15.3321 9.60341 15.3358 9.54476 15.328 9.4871C15.3202 9.42943 15.301 9.3739 15.2714 9.32374C15.2419 9.27359 15.2027 9.22981 15.1561 9.19496C15.1095 9.16012 15.0564 9.1349 15 9.12079C14.9435 9.10668 14.8848 9.10394 14.8273 9.11276C14.7698 9.12157 14.7146 9.14175 14.6649 9.17211C14.6153 9.20248 14.5722 9.24243 14.5381 9.28963C14.5041 9.33683 14.4798 9.39034 14.4667 9.44703C14.3832 9.79527 14.205 10.1136 13.9518 10.3668C13.6986 10.6201 13.3802 10.7983 13.032 10.8817C12.92 10.9106 12.8239 10.9827 12.7648 11.0821C12.7056 11.1816 12.6882 11.3004 12.7164 11.4126C12.7445 11.5249 12.8158 11.6214 12.9149 11.6813C13.0139 11.7411 13.1326 11.7594 13.245 11.732C13.7472 11.61 14.2062 11.3522 14.5717 10.9867C14.9371 10.6212 15.195 10.1623 15.317 9.66006V9.65962Z"
                fill="#71839B" />
              <path
                d="M12.7002 4.29357C14.0152 4.29357 14.8919 3.4169 14.8919 2.10191C13.5769 2.10191 12.7002 2.97857 12.7002 4.29357Z"
                fill="#71839B" />
            </svg>

            <h3>Nutrição</h3>
          </a>
        </div>
        <div class="topicosInferiores">
          <a href="" class="icone">
            <svg width="17" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15.5833 9.54999C15.4497 9.39792 15.3761 9.20242 15.3761 8.99999C15.3761 8.79757 15.4497 8.60207 15.5833 8.44999L16.65 7.24999C16.7675 7.11888 16.8405 6.95391 16.8585 6.77875C16.8765 6.60359 16.8385 6.42723 16.75 6.27499L15.0833 3.39166C14.9957 3.2396 14.8624 3.11906 14.7023 3.04723C14.5422 2.97541 14.3635 2.95596 14.1917 2.99166L12.625 3.30833C12.4256 3.34952 12.2181 3.31632 12.0416 3.21499C11.865 3.11367 11.7317 2.95123 11.6667 2.75833L11.1583 1.23333C11.1024 1.06781 10.9959 0.924048 10.8539 0.822362C10.7118 0.720676 10.5414 0.66621 10.3667 0.666661H7.03333C6.85161 0.657176 6.67177 0.707433 6.5213 0.809756C6.37082 0.912079 6.25798 1.06084 6.19999 1.23333L5.73333 2.75833C5.66833 2.95123 5.53497 3.11367 5.35842 3.21499C5.18187 3.31632 4.97434 3.34952 4.77499 3.30833L3.16666 2.99166C3.00379 2.96864 2.83774 2.99435 2.68945 3.06553C2.54116 3.13671 2.41725 3.25018 2.33333 3.39166L0.666662 6.27499C0.575962 6.42554 0.53518 6.6009 0.550147 6.77601C0.565114 6.95113 0.635064 7.11703 0.749995 7.24999L1.80833 8.44999C1.94193 8.60207 2.01561 8.79757 2.01561 8.99999C2.01561 9.20242 1.94193 9.39792 1.80833 9.54999L0.749995 10.75C0.635064 10.883 0.565114 11.0489 0.550147 11.224C0.53518 11.3991 0.575962 11.5745 0.666662 11.725L2.33333 14.6083C2.42091 14.7604 2.55426 14.8809 2.71437 14.9528C2.87448 15.0246 3.05318 15.044 3.225 15.0083L4.79166 14.6917C4.99101 14.6505 5.19854 14.6837 5.37509 14.785C5.55164 14.8863 5.685 15.0488 5.74999 15.2417L6.25833 16.7667C6.31631 16.9391 6.42916 17.0879 6.57963 17.1902C6.73011 17.2926 6.90994 17.3428 7.09166 17.3333H10.425C10.5997 17.3338 10.7701 17.2793 10.9122 17.1776C11.0542 17.0759 11.1608 16.9322 11.2167 16.7667L11.725 15.2417C11.79 15.0488 11.9234 14.8863 12.0999 14.785C12.2764 14.6837 12.484 14.6505 12.6833 14.6917L14.25 15.0083C14.4218 15.044 14.6005 15.0246 14.7606 14.9528C14.9207 14.8809 15.0541 14.7604 15.1417 14.6083L16.8083 11.725C16.8968 11.5728 16.9348 11.3964 16.9168 11.2212C16.8989 11.0461 16.8259 10.8811 16.7083 10.75L15.5833 9.54999ZM14.3417 10.6667L15.0083 11.4167L13.9417 13.2667L12.9583 13.0667C12.3581 12.944 11.7338 13.0459 11.2038 13.3532C10.6738 13.6604 10.2751 14.1515 10.0833 14.7333L9.76666 15.6667H7.63333L7.33333 14.7167C7.14154 14.1349 6.74281 13.6437 6.21283 13.3365C5.68285 13.0293 5.05851 12.9273 4.45833 13.05L3.47499 13.25L2.39166 11.4083L3.05833 10.6583C3.46829 10.2 3.69494 9.6066 3.69494 8.99166C3.69494 8.37672 3.46829 7.78335 3.05833 7.32499L2.39166 6.57499L3.45833 4.74166L4.44166 4.94166C5.04185 5.06435 5.66618 4.96239 6.19617 4.65516C6.72615 4.34792 7.12487 3.85679 7.31666 3.27499L7.63333 2.33333H9.76666L10.0833 3.28333C10.2751 3.86513 10.6738 4.35626 11.2038 4.66349C11.7338 4.97073 12.3581 5.07268 12.9583 4.94999L13.9417 4.74999L15.0083 6.59999L14.3417 7.34999C13.9363 7.80729 13.7125 8.39723 13.7125 9.00833C13.7125 9.61943 13.9363 10.2094 14.3417 10.6667V10.6667ZM8.69999 5.66666C8.04072 5.66666 7.39626 5.86216 6.84809 6.22843C6.29993 6.5947 5.87269 7.1153 5.6204 7.72438C5.3681 8.33347 5.30209 9.00369 5.43071 9.6503C5.55933 10.2969 5.8768 10.8908 6.34297 11.357C6.80915 11.8232 7.40309 12.1407 8.04969 12.2693C8.6963 12.3979 9.36652 12.3319 9.97561 12.0796C10.5847 11.8273 11.1053 11.4001 11.4716 10.8519C11.8378 10.3037 12.0333 9.65927 12.0333 8.99999C12.0333 8.11594 11.6821 7.26809 11.057 6.64297C10.4319 6.01785 9.58405 5.66666 8.69999 5.66666V5.66666ZM8.69999 10.6667C8.37036 10.6667 8.04813 10.5689 7.77404 10.3858C7.49996 10.2026 7.28634 9.94234 7.1602 9.6378C7.03405 9.33326 7.00104 8.99815 7.06535 8.67484C7.12966 8.35154 7.2884 8.05457 7.52148 7.82148C7.75457 7.5884 8.05154 7.42966 8.37484 7.36535C8.69815 7.30104 9.03326 7.33405 9.3378 7.46019C9.64234 7.58634 9.90264 7.79996 10.0858 8.07404C10.2689 8.34813 10.3667 8.67036 10.3667 8.99999C10.3667 9.44202 10.1911 9.86594 9.87851 10.1785C9.56595 10.4911 9.14202 10.6667 8.69999 10.6667Z"
                fill="#71839B" />
            </svg>

            <h3>Configuração</h3>
          </a>
          <a href="../../index.html" class="icone">
            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.49169 9.83335L7.57502 11.7417C7.49691 11.8191 7.43492 11.9113 7.39261 12.0129C7.3503 12.1144 7.32852 12.2233 7.32852 12.3333C7.32852 12.4434 7.3503 12.5523 7.39261 12.6538C7.43492 12.7554 7.49691 12.8475 7.57502 12.925C7.65249 13.0031 7.74466 13.0651 7.84621 13.1074C7.94776 13.1497 8.05668 13.1715 8.16669 13.1715C8.2767 13.1715 8.38562 13.1497 8.48717 13.1074C8.58872 13.0651 8.68088 13.0031 8.75835 12.925L12.0917 9.59168C12.1676 9.51243 12.227 9.41897 12.2667 9.31668C12.35 9.11379 12.35 8.88623 12.2667 8.68335C12.227 8.58105 12.1676 8.4876 12.0917 8.40835L8.75835 5.07501C8.68066 4.99731 8.58841 4.93568 8.4869 4.89363C8.38538 4.85158 8.27657 4.82994 8.16669 4.82994C8.0568 4.82994 7.948 4.85158 7.84648 4.89363C7.74496 4.93568 7.65272 4.99731 7.57502 5.07501C7.49732 5.15271 7.43569 5.24495 7.39364 5.34647C7.35159 5.44799 7.32994 5.5568 7.32994 5.66668C7.32994 5.77656 7.35159 5.88537 7.39364 5.98689C7.43569 6.0884 7.49732 6.18065 7.57502 6.25835L9.49169 8.16668H1.50002C1.27901 8.16668 1.06704 8.25448 0.910765 8.41076C0.754484 8.56704 0.666687 8.779 0.666687 9.00001C0.666687 9.22103 0.754484 9.43299 0.910765 9.58927C1.06704 9.74555 1.27901 9.83335 1.50002 9.83335H9.49169ZM9.00002 0.666679C7.4426 0.659725 5.91439 1.08936 4.58874 1.90684C3.2631 2.72432 2.19307 3.89694 1.50002 5.29168C1.40056 5.49059 1.3842 5.72087 1.45453 5.93184C1.52485 6.14282 1.67611 6.31722 1.87502 6.41668C2.07393 6.51613 2.30421 6.5325 2.51519 6.46217C2.72616 6.39185 2.90056 6.24059 3.00002 6.04168C3.52685 4.97778 4.32821 4.07386 5.32131 3.42333C6.31441 2.77281 7.46321 2.39928 8.64898 2.34134C9.83476 2.2834 11.0145 2.54316 12.0663 3.09377C13.1181 3.64438 14.0037 4.46587 14.6318 5.47334C15.2598 6.48081 15.6074 7.63772 15.6387 8.8245C15.67 10.0113 15.3837 11.1849 14.8096 12.224C14.2355 13.2632 13.3943 14.1301 12.373 14.7354C11.3516 15.3406 10.1872 15.6621 9.00002 15.6667C7.75742 15.6721 6.53848 15.327 5.4831 14.6711C4.42771 14.0151 3.57865 13.0749 3.03335 11.9583C2.9339 11.7594 2.7595 11.6082 2.54852 11.5379C2.33754 11.4675 2.10727 11.4839 1.90835 11.5833C1.70944 11.6828 1.55818 11.8572 1.48786 12.0682C1.41753 12.2792 1.4339 12.5094 1.53335 12.7083C2.19404 14.0379 3.19795 15.1669 4.44125 15.9784C5.68454 16.7899 7.12206 17.2545 8.60512 17.3242C10.0882 17.3938 11.5629 17.066 12.8768 16.3746C14.1907 15.6832 15.296 14.6533 16.0784 13.3915C16.8608 12.1297 17.2919 10.6818 17.3271 9.19751C17.3623 7.71324 17.0003 6.2465 16.2786 4.94904C15.5568 3.65157 14.5016 2.57048 13.2219 1.8176C11.9423 1.06472 10.4847 0.667376 9.00002 0.666679V0.666679Z"
                fill="#71839B" />
            </svg>

            <h3>Sair</h3>
          </a>

        </div>
      </div>
      <!-- topicos -->
    </sidenav>
    <div class="sessao">
      <div class="pacienteStatus">
        <div class="cabecalho">
          <div>
            <img src="../<?php echo $linha['path']?>" />
          </div>
          <div>
            <h3><?php echo $linha['nome']?></h3>
            <p>Idade: <span><?php echo("$idade anos") ?></span></p>
            <div class="status">
              <div class="statusAtivo"></div>
              <p>Status: <span>Ativo</span></p>
            </div>
          </div>
        </div>
        <div class="menuInformacao">
          <p id="anamnese" class="informacao selecionado">
            Anamnese
          </p>
          <p id="evolucao" class="informacao">
            Evolução Multidisciplinar
          </p>
          <p id="consulta" class="informacao">
            Consulta
          </p>
        </div>
      </div>
      <!-- pacienteStatus-->

      <div id="container-anamnese" class="abaConteudo sessaoConteudo abaSelecionado ">
        <div class="descricao w100">
          <h3>Relacione os problemas de saúde relatados com os medicamentos utilizados para seu controle, indicando a dose, posologia, início do tratamento e se a enfermidade está sob controle. Caso utilize outros medicamentos sem prescrição médica ou motivo clínico diagnosticado relatar o uso nos mesmos parâmetros.</h3>
          <div>
            <p> Não faço uso de nenhum medicamento até o momento </p>
          </div>
        </div>
        <div class="descricao w100">
          <h3>Paciente relata utilizar ou ter utilizado algum destes medicamentos? (Relação de medicamentos utilizados no tratamento da obesidade)</h3>
          <div>
            <p>Não faz nenhum uso.</p>
          </div>
        </div>
      </div>
      <!--containerAnanese-->

      <div id="container-evolucao" class="abaConteudo sessaoEvolucao  ">
        <div class=" buscar">
          <div>
            <div class=" cardPesquisa ">
              <div class="pesquisa">
                <h3>Área</h3>
                <select class="select" name="select">
                  <option value="todos">Todos</option>
                  <option value="enfermagem">Enfermagem</option>
                  <option value="fisioterapia">Fisioterapia</option>
                  <option value="biomedicina">Biomedicina</option>
                  <option value="psicologia">Psicologia</option>
                  <option value="farmacia">Farmácia</option>
                  <option value="ed-fisica" selected>Ed. física</option> 
                  <option value="nutricao">Nutrição</option>
                </select>
              </div>
              <div class="pesquisa">
                <h3>Data</h3>
                <input class="select" type="date" />
              </div>
            </div>
            <div class="novaObservacao">
              <div id="evolucaoadicionar" class="adicionar">
                <p>Nova Observação</p><span class="material-symbols-outlined">add_circle </span>
              </div>
            </div>
          </div>
          <div class="cardObservacao">
            <div class="card">
              <div class="topico">
                <h3>Título:</h3>
                <p>Exercícios</p>
              </div>
              <!--topico-->
              <div class="data">
                <h3>Data:</h3>
                <p>09/09/2022</p>
              </div>
              <!--data-->
              <div class="area">
                <h3>Área:</h3>
                <p>Educação</p>
              </div>
              <!--area-->
              <div class="profissional">
                <h3>Profissional:</h3>
                <p>Iago</p>
              </div>
              <!--profissional-->
              <div class="observacao">
                <h3>Observação</h3>
                <ul>
                  <li>AGACHAMENTO Repetições: 2 séries de 15 repetições, com o intervalo de 30 segundos entre cada
                    série.</li>
                  <li>PONTE PÉLVICA Repetições: Faça este exercício 4 vezes e o máximo de repetições que conseguir
                    durante 30 segundos.
                    Entre cada série descanse 15 segundos.</li>
                </ul>
              </div>
              <!--observacao-->
            </div><!-- card-->

            <div class="card">
              <div class="topico">
                <h3>Título:</h3>
                <p>Exercícios</p>
              </div>
              <!--topico-->
              <div class="data">
                <h3>Data:</h3>
                <p>09/09/2022</p>
              </div>
              <!--data-->
              <div class="area">
                <h3>Área:</h3>
                <p>Educação</p>
              </div>
              <!--area-->
              <div class="profissional">
                <h3>Profissional:</h3>
                <p>Iago</p>
              </div>
              <!--profissional-->
              <div class="observacao">
                <h3>Observação</h3>
                <ul>
                  <li>AGACHAMENTO Repetições: 2 séries de 15 repetições, com o intervalo de 30 segundos entre cada
                    série.</li>
                  <li>PONTE PÉLVICA Repetições: Faça este exercício 4 vezes e o máximo de repetições que conseguir
                    durante 30 segundos.
                    Entre cada série descanse 15 segundos.</li>
                </ul>
              </div>
              <!--observacao-->
            </div><!-- card-->

          </div><!-- cardObservacao-->
        </div>
        <!--buscar-->
      </div>
      <!--containerEvolucao-->

      <div id="container-evolucaoadicionar" class="abaConteudo sessaoEvolucaoAdicionar ">
        <form class="sessaoConteudo" action="">
          <div class="descricao w100">
            <h3>Tópico:</h3>
            <input type="text" placeholder="Digite o titulo da Observação">
          </div>

          <div class="descricao w50">
            <h3>Data</h3>
            <input type="date">
          </div>

          <div class="descricao w50">
            <h3>Área:</h3>
            <input type="text" placeholder="Digite a área de atuação">
          </div>

          <div class="observacao descricao w100">
            <h3>Observação:</h3>
            <textarea placeholder="Digite a área de atuação"></textarea>
          </div>

          <div class="descricao w100">
            <h3>Privacidade (Dados Sensíveis que outras áreas não poderão Consultar)</h3>
            <input type="checkbox" nome="switch" id="switch">
          </div>

          <div class="descricao w100 btnSalva ">
            <button>Salvar</button>
          </div>
        </form>
      </div>
      <!--containerEvoulcaoAdiconar-->


      <div id="container-consulta" class="abaConteudo abaConsulta ">
        <div class="historico sessaoConteudo">
          <div class="novaObservacao w100 ">
            <div id="consultaadicionar" class="adicionar ">
              <p>Nova Agendamento</p><span class="material-symbols-outlined">add_circle </span>
            </div>
          </div>

          <table class="w100" cellspacing="0">
            <caption>
              <h2>Histórico de Consulta</h2>
            </caption>
            <thead>
              <th>Consulta</th>
              <th>Hora</th>
              <th>Área</th>
              <th>Profissional</th>
              <th>Status</th>
            </thead>
            <tbody>
              <tr>
                <td>09/09/2022</td>
                <td>08:30</td>
                <td>Enfermagem</td>
                <td>Iago</td>
                <td class="status-conluido">Concluído</td>
              </tr>
              <tr>
                <td>09/011/2022</td>
                <td>08:30</td>
                <td>Ed. Física</td>
                <td>Iago</td>
                <td class="status-agendado">Agendado</td>
              </tr>


          </table>


        </div>

      </div>
      <!--Containerconsulta-->

      <div id="container-consultaadicionar" class="abaConteudo sessaoConsultaAdicionar ">
        <div class="sessaoConteudo">
          <div class="calendario w35">
            <h2 id="ano">2022</h2>
            <div class="header-calendario">
              <a class="btn-ant" id="btn_anterior"><</a>
              <h2 id="mes">Outubro</h2>
              <a class="btn-pro" id="btn_proximo">></a>
            </div>

            <table cellspacing="0">
              <thead>
                <tr>
                  <td>Dom</td>
                  <td>Seg</td>
                  <td>Ter</td>
                  <td>Qua</td>
                  <td>Qui</td>
                  <td>Sex</td>
                  <td>Sab</td>
                </tr>
              </thead>
              <tbody id="dias">
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td class="evento" >5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
              </tbody>
            </table>
            <div class="footer-calendario">
              <p>(OBS: Dias com bolinhas em <span>Azul</span> , são dias já agendados)</p>
            </div>
          </div>
          <div class="agendar-consulta w50">
            <form class="sessaoConteudo">
              
              <div class="descricao w50">
                <label for="Dia">Dia</label>
                <input type="date" name="Dia" >
              </div>
              
              <div class="descricao w50">
                <label for="horario">Horario</label>
                <input type="time" name="horario" >
              </div>


              <div class="descricao w50">
                <label for="area">Area</label>
                <select class="select">
                  <option value="enfermagem">Enfermagem</option>
                  <option value="fisioterapia">Fisioterapia</option>
                  <option value="biomedicina">Biomedicina</option>
                  <option value="psicologia">Psicologia</option>
                  <option value="farmacia">Farmácia</option>
                  <option value="ed-fisica">Ed. física</option> 
                  <option value="nutricao">Nutrição</option>
                </select>
              </div>

              <div class="observacao descricao  w100">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" ></textarea>
              </div>

              <div class="notificacao w100">
                <h4>Selecione o meio de notificar o paciente:</h4>
                <input type="radio" name="notificacao" value="telefone">
                <label for="telefone">Telefone</label><br>
                <input type="radio" name="notificacao" value="email">
                <label for="email">E-mail</label>
              </div>

              <div class="descricao w100 btnSalva ">
                <button>Agendar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--sessaoConsultaAdicionar-->

    </div>
    <!--sessao-->
  </section>
  <script src="../js/paciente.js"></script>
  <script src="../js/consulta.js"></script>
</body>

</html>