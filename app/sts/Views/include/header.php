<?php if (!defined('R4F5CC')) {
  header("Location: /");
  die("Erro: Página não encontrada");
}
?>

<header id="header">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <div class="container-fluid">

        <a class="navbar-brand" href="<?php echo $this->dados['navega']['link_1_nav']; ?>">
          <svg id="a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1578.02 699.08" width="110">
            <g>
              <path class="b" d="M58.56,391.58l-.25-8.84c-.03-.93,.7-1.7,1.62-1.75l28.33-1.29c.93-.04,1.72,.67,1.77,1.6l.79,13.88c.14,3.14,.85,5.49,2.14,7.07,1.28,1.57,3.31,2.3,6.08,2.17,4.22-.19,6.18-3.73,5.87-10.61-.23-5.07-1.41-9.01-3.53-11.81-2.12-2.81-5.43-5.74-9.92-8.8l-17.43-12.27c-6-4.2-10.37-8.63-13.12-13.28-2.75-4.65-4.32-11.32-4.72-20.01-.31-6.76,1.21-12.6,4.55-17.53,3.34-4.93,7.92-8.73,13.72-11.42,5.8-2.68,12.33-4.19,19.57-4.52,25.7-1.17,39.14,11.04,40.3,36.62l.04,.84c.04,.94-.68,1.73-1.62,1.77l-29.37,1.33c-.94,.04-1.73-.68-1.77-1.62l-.15-3.37c-.14-3.14-.78-5.8-1.91-7.99-1.13-2.18-2.9-3.22-5.31-3.11-2.17,.1-3.8,.81-4.89,2.13-1.09,1.32-1.58,3.07-1.49,5.24,.22,4.83,2.26,8.48,6.12,10.97l20.2,13.41c7.23,4.87,12.86,10.27,16.88,16.19,4.02,5.92,6.24,13.53,6.66,22.82,.56,12.31-2.51,21.94-9.21,28.9-6.7,6.96-16.32,10.72-28.87,11.29-26.19,1.19-39.88-11.49-41.09-38.04Z" />
              <path class="b" d="M156.62,424.66c-2.89-2.94-4.49-7.8-4.8-14.57l-3.22-70.82c-.04-.94-.84-1.66-1.77-1.62l-4.38,.2c-.94,.04-1.73-.68-1.77-1.62l-.81-17.71c-.04-.94,.68-1.73,1.62-1.77l4.38-.2c.94-.04,1.66-.84,1.62-1.77l-.96-21.2c-.04-.94,.68-1.73,1.62-1.77l23.58-1.07c.94-.04,1.73,.68,1.77,1.62l.96,21.2c.04,.94,.84,1.66,1.77,1.62l4.54-.21c.94-.04,1.73,.68,1.77,1.62l.81,17.71c.04,.94-.68,1.73-1.62,1.77l-4.54,.21c-.94,.04-1.66,.84-1.62,1.77l2.89,63.52c.09,2.01,.32,3.48,.68,4.42,.36,.94,1.23,1.37,2.6,1.31,1.06-.05,2.06-.15,3.01-.3h.03c1-.16,1.91,.59,1.95,1.6l.72,15.86c.04,.79-.47,1.51-1.24,1.71-1.44,.39-3.29,.82-5.54,1.28-2.99,.61-5.92,.99-8.77,1.11-7.3,.33-12.39-.97-15.28-3.92Z" />
              <path class="b" d="M203.43,408.71c-3.8-4.87-6.25-12.47-7.35-22.8l-9.05-85.36c-.1-.93,.58-1.77,1.51-1.87l24.73-2.62c.93-.1,1.77,.58,1.87,1.51l8.46,79.77c.08,.75,.29,2.74,.63,5.99,.35,3.25,1.09,5.48,2.24,6.71,1.15,1.22,2.79,1.72,4.93,1.5,2.88-.31,4.56-1.69,5.05-4.17,.49-2.47,.5-5.95,.03-10.42l-.1-.96-8.3-79.79c-.1-.93,.58-1.77,1.51-1.87l24.42-2.59c.93-.1,1.77,.58,1.87,1.51l12.04,113.54c.1,.93-.58,1.77-1.51,1.87l-24.57,2.6c-.93,.1-1.77-.58-1.87-1.51l-.37-3.52c-.18-1.68-2.46-2.13-3.21-.61-.93,1.88-1.98,3.41-3.14,4.61-2.33,2.4-6,3.87-11,4.4-8.73,.93-15-1.05-18.8-5.92Z" />
              <path class="b" d="M285.91,412.12c-3.87-2.59-6.78-6.39-8.73-11.42-1.95-5.02-3.59-11.61-4.95-19.75l-8.16-51.08c-1.33-8.04-.39-14.95,2.84-20.73,3.23-5.78,8.55-9.28,15.97-10.51,5.65-.94,10.43-.25,14.35,2.07,1.25,.74,2.79-.29,2.55-1.73l-3.41-20.56c-.15-.93,.47-1.8,1.4-1.95l23.71-3.93c.93-.15,1.8,.47,1.95,1.4l21.61,130.25c.15,.93-.47,1.8-1.4,1.95l-23.71,3.93c-.93,.15-1.8-.47-1.95-1.4l-.52-3.12c-.28-1.66-2.53-1.94-3.22-.41s-1.58,2.97-2.59,4.16c-2.26,2.65-5.61,4.35-10.04,5.08-6.6,1.09-11.83,.35-15.7-2.24Zm27.15-25.48c.39-2.77,.21-6.36-.52-10.8l-.8-4.79-7.05-42.52c-.55-3.3-1.47-6-2.78-8.12-1.3-2.11-3.14-2.97-5.51-2.58-2.68,.45-4.29,1.8-4.81,4.06-.53,2.26-.49,5.19,.11,8.8l7.9,47.63c1.57,9.49,4.53,13.87,8.86,13.15,2.68-.44,4.21-2.05,4.6-4.81Z" />
              <path class="b" d="M345.12,301.36l-.82-14.64c-.05-.94,.66-1.74,1.6-1.79l22.47-1.26c.94-.05,1.74,.66,1.79,1.6l.82,14.64c.05,.94-.66,1.74-1.6,1.79l-22.47,1.26c-.94,.05-1.74-.66-1.79-1.6Zm6.48,115.42l-5.89-104.79c-.05-.94,.66-1.74,1.6-1.79l22.47-1.26c.94-.05,1.74,.66,1.79,1.6l5.89,104.79c.05,.94-.66,1.74-1.6,1.79l-22.47,1.26c-.94,.05-1.74-.66-1.79-1.6Z" />
              <path class="b" d="M380.8,378.53l-2.03-44.76c-.48-10.56,2.11-19.09,7.76-25.6,5.65-6.51,13.66-10,24.01-10.47,10.35-.47,18.64,2.28,24.86,8.25,6.22,5.97,9.57,14.24,10.05,24.79l2.03,44.76c1.05,23.04-9.54,35.06-31.77,36.07-22.23,1.01-33.86-10-34.91-33.04Zm38.59,9.99c.94-1.57,1.36-3.67,1.24-6.31l-2.48-54.5c-.3-6.49-2.52-9.65-6.69-9.46-4.16,.19-6.1,3.53-5.8,10.03l2.48,54.5c.12,2.64,.72,4.7,1.81,6.17,1.08,1.48,2.69,2.17,4.82,2.07,2.13-.1,3.67-.93,4.62-2.5Z" />
            </g>
            <path class="b" d="M60.95,285.83s72.06-7.42,73.12,5.3c6.29,12.32,3.71-30.2,43.25-9.14s60-22.25,60-22.25l45.3,28.01s6.56-38.74,39.94-32.39c33.38,6.36,55.63,25.92,55.63,25.92,0,0,54.04-.88,69.94,38.46,13.11,32.46,40.29,5.68,49.4-4.68C513.46,82.09,383.51,13.14,252.28,13.14S-9.76,80.57,6.17,307.38l54.78-21.55Z" />
            <path class="b" d="M361.49,429.41c-45.7-14.7-190.34,11.99-190.34,11.99,0,0-104.11,2.31-109.28-22.72-3.01-14.58-19.37,3.33-32.5,20.83,37.95,134.35,117.19,246.42,224.34,246.42,116.99,0,200.66-133.34,231.84-283.8-24.28,11.62-87.66,38.99-124.06,27.28Z" />
            <g>
              <path class="b" d="M534.46,145.62c0-3.04,2.47-5.51,5.51-5.51h113.07c31.89,0,55.04,7.81,69.47,23.41,14.42,15.61,21.63,41.06,21.63,76.34v19.34c0,35.29-10.68,58.57-32.03,69.84l.02,9.73c11.68,5.92,20.32,15.36,25.91,28.32,7.46,17.3,11.2,40.21,11.2,68.71,0,46.49-6.96,81.68-20.87,105.6-13.92,23.92-39.02,35.88-75.32,35.88h-113.07c-3.04,0-5.51-2.47-5.51-5.51V145.62Zm103.31,158.88c7.46,0,12.55-2.8,15.27-8.4,2.71-5.6,4.07-13.49,4.07-23.66v-43.77c0-14.25-6.28-21.37-18.83-21.37h-12.81c-3.04,0-5.51,2.47-5.51,5.51v86.19c0,3.04,2.47,5.51,5.51,5.51h12.3Zm24.94,163.37v-54.46c0-13.23-1.96-23.24-5.85-30.03-3.9-6.78-10.78-10.18-20.61-10.18h-10.78c-3.04,0-5.51,2.47-5.51,5.51v116.02c0,2.92,2.27,5.33,5.18,5.5l2.95,.17c.34,.02,.69,.03,1.04,.03,22.38-.17,33.58-11.02,33.58-32.57Z" />
              <path class="b" d="M791.21,556.42c-10.35-16.62-15.52-41.39-15.52-74.3V210.26c0-3.04,2.47-5.51,5.51-5.51h78.55c3.04,0,5.51,2.47,5.51,5.51V483.39c0,10.35,1.61,17.65,4.83,21.88,3.22,4.25,8.22,6.36,15.01,6.36,9.16,0,14.93-3.82,17.3-11.45,2.37-7.63,3.56-18.58,3.56-32.83v-3.05l.5-254.06c0-3.04,2.47-5.5,5.51-5.5h77.55c3.04,0,5.51,2.47,5.51,5.51v361.52c0,3.04-2.47,5.51-5.51,5.51h-78.05c-3.04,0-5.51-2.47-5.51-5.51v-10.77c0-5.48-7.16-7.62-10.12-3.01-3.51,5.46-7.26,9.85-11.26,13.18-8.14,6.78-20.19,10.18-36.13,10.18-27.82,0-46.91-8.31-57.25-24.94Z" />
              <path class="b" d="M1036.17,204.75h78.05c3.04,0,5.51,2.47,5.51,5.51v11.85c0,5.37,6.85,7.53,10,3.18,3.68-5.09,8.07-9.48,13.16-13.16,9.67-6.99,21.38-10.92,35.1-11.78,3.17-.2,5.86,2.32,5.86,5.5v63.22c0,2.98-2.37,5.39-5.34,5.5-11.11,.43-23.15,2.18-36.13,5.24-15.1,3.56-22.65,7.72-22.65,12.47v279.49c0,3.04-2.47,5.51-5.51,5.51h-78.05c-3.04,0-5.51-2.47-5.51-5.51V210.26c0-3.04,2.47-5.51,5.51-5.51Z" />
              <path class="b" d="M1205.22,174.3v-51.07c0-3.04,2.47-5.51,5.51-5.51h78.05c3.04,0,5.51,2.47,5.51,5.51v51.07c0,3.04-2.47,5.51-5.51,5.51h-78.05c-3.04,0-5.51-2.47-5.51-5.51Zm0,397.47V210.26c0-3.04,2.47-5.51,5.51-5.51h78.05c3.04,0,5.51,2.47,5.51,5.51v361.52c0,3.04-2.47,5.51-5.51,5.51h-78.05c-3.04,0-5.51-2.47-5.51-5.51Z" />
              <path class="b" d="M1357.89,566.6c-8.83-9.84-13.23-25.61-13.23-47.33v-227.07c0-3.04-2.47-5.51-5.51-5.51h-13.92c-3.04,0-5.51-2.47-5.51-5.51v-56.67c0-3.04,2.47-5.51,5.51-5.51h13.92c3.04,0,5.51-2.47,5.51-5.51v-67.87c0-3.04,2.47-5.51,5.51-5.51h75.5c3.04,0,5.51,2.47,5.51,5.51v67.87c0,3.04,2.47,5.51,5.51,5.51h14.43c3.04,0,5.51,2.47,5.51,5.51v56.67c0,3.04-2.47,5.51-5.51,5.51h-14.43c-3.04,0-5.51,2.47-5.51,5.51v203.66c0,6.45,.51,11.2,1.53,14.25,1.02,3.05,3.73,4.58,8.14,4.58,3.39,0,6.62-.17,9.67-.51h0c3.26-.36,6.11,2.2,6.11,5.48v50.76c0,2.58-1.78,4.81-4.29,5.37-4.67,1.05-10.62,2.14-17.85,3.28-9.67,1.53-19.08,2.29-28.25,2.29-23.41,0-39.53-4.91-48.35-14.76Z" />
              <path class="b" d="M1484.1,174.3v-51.07c0-3.04,2.47-5.51,5.51-5.51h78.05c3.04,0,5.51,2.47,5.51,5.51v51.07c0,3.04-2.47,5.51-5.51,5.51h-78.05c-3.04,0-5.51-2.47-5.51-5.51Zm0,397.47V210.26c0-3.04,2.47-5.51,5.51-5.51h78.05c3.04,0,5.51,2.47,5.51,5.51v361.52c0,3.04-2.47,5.51-5.51,5.51h-78.05c-3.04,0-5.51-2.47-5.51-5.51Z" />
            </g>
          </svg>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-image: url('<?php echo URL ?>app/sts/assets/imagens/icones/<?php echo $this->dados['menu']['toggler_icon']; ?>');"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $this->dados['menu']['link_nav_1']; ?>"><?php echo $this->dados['menu']['nav_1']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $this->dados['menu']['link_nav_2']; ?>"><?php echo $this->dados['menu']['nav_2']; ?></a>
            </li>

            <!-- AQUI, COLOCAR OS SERVIÇOS NO MENU DROPDOWN  -->
            <!-- <li class="nav-item dropdown"> 
              <a class="nav-link dropdown-toggle" href="<?php echo $this->dados['menu']['link_nav_3']; ?>" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $this->dados['menu']['nav_3']; ?></a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <div class="container">
                  <li><a class="dropdown-item" href="<?php echo $this->dados['dropdown']['link_drop_1']; ?>"><?php echo $this->dados['dropdown']['drop_1']; ?></a></li> -->
                  <!--                     <li><a class="dropdown-item" href="<?php echo $this->dados['dropdown']['link_drop_2']; ?>"><?php echo $this->dados['dropdown']['drop_2']; ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo $this->dados['dropdown']['link_drop_3']; ?>"><?php echo $this->dados['dropdown']['drop_3']; ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo $this->dados['dropdown']['link_drop_4']; ?>"><?php echo $this->dados['dropdown']['drop_4']; ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo $this->dados['dropdown']['link_drop_5']; ?>"><?php echo $this->dados['dropdown']['drop_5']; ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo $this->dados['dropdown']['link_drop_6']; ?>"><?php echo $this->dados['dropdown']['drop_6']; ?></a></li>
 -->
                <!-- </div>
              </ul>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $this->dados['menu']['link_nav_4']; ?>"><?php echo $this->dados['menu']['nav_4']; ?></a>
            </li>
            <!--          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->dados['menu']['link_nav_5']; ?>"><?php echo $this->dados['menu']['nav_5']; ?></a>
          </li> -->
            <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->dados['menu']['link_nav_6']; ?>"><?php echo $this->dados['menu']['nav_6']; ?></a>
          </li> -->
          </ul>

          <div>
            <a href="https://www.instagram.com/stburiti/" target="_blank" class="link-color-3"><i class="bi bi-instagram"></i>&nbsp;@stburiti</a>
            <a href="https://www.youtube.com/channel/UCA-I_4wmT83juOXS6wYCEcw" target="_blank" class="ms-2 link-color-3"><i class="bi bi-youtube"></i>&nbsp;Studio Buriti</a>
            <a href="tel:5511963180486" class="ms-2 link-color-3"><i class="bi bi-telephone"></i>&nbsp;<span>(11) 96318-0486</span></a>
          </div>

        </div>
      </div>
    </nav>
  </div>
</header>