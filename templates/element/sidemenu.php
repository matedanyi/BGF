<div class="col-lg-2 d-none d-lg-block" id="thirddiv">
  <header class="col-12">
    <h4>Funkciók</h4>
    <span class="f-right">
      <?= $this->Html->image('arrow_left.png', ['title' => 'összecsuk', 'alt' => 'összecsuk', 'id' => 'panel-zaro']);  ?>

    </span>
  </header>

  <div class="col-12 m-b-20">
    <br>
    <ul class="fofunkcio">
      <li>

        <?php echo $this->Html->link(
          'Felhasználók',
          '/users/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>
      <hr>
      <li>
        <?php echo $this->Html->link(
          'Termelési riport',
          '/products/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>


      </li>
      <li>
        <?php echo $this->Html->link(
          'Szerszám lista',
          '/tools/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>
      <ul>
        <li>
          <?php echo $this->Html->link(
            'Szerszám hozzáadása',
            '/addtool',
            ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
          ); ?>

        </li>
      </ul>
      <li>
        <?php echo $this->Html->link(
          'Kiadók',
          '/publishers/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>
      <ul>
        <li>

          <?php echo $this->Html->link(
            ' Új kiadó felvétele',
            '/publishers/index',
            ['class' => 'btn bg-transparent sidemenu addnewpub', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newpublisher', "class" => "addnewpub"]
          ); ?>

        </li>
      </ul>
      <li>
        <?php echo $this->Html->link(
          'Társasjátékok',
          '/boardgames/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>
      <ul>
        <li>
          <?php echo $this->Html->link(
            'Alkatrész lista',
            '/gameparts/index',
            ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
          ); ?>

        </li>
        <li>


          <?php echo $this->Html->link(
            'Új társasjáték',
            '/boardgames/index',
            ['class' => 'btn bg-transparent sidemenu addnewbg', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newboardgame', "id" => "addnewbg"]
          ); ?>

        </li>
      </ul>
      <hr>


      <li>
        <?php echo $this->Html->link(
          'Kijelentkezés',
          '/users/logout',
          ['class' => 'btn bg-transparent sidemenu',  "role" => "button"]
        ); ?>

      </li>
    </ul>
  </div>
</div>