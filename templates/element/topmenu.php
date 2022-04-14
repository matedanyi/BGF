<div class="d-lg-none dropdown">
  <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

    <?= $this->Html->image('menu.png', ['title' => 'menü', 'alt' => 'menü']); ?>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

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
          'Termelési Riport',
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
            ['class' => 'btn bg-transparent sidemenu addnewpub', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newpublisher', "id" => "addnewpub"]
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
            '/tools/index',
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
          ['class' => 'btn bg-transparent sidemenu', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newboardgame']
        ); ?>

      </li>
    </ul>

  </ul>
</div>