<div class="d-lg-none dropdown">
  <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

    <?= $this->Html->image('menu.png', ['title' => 'menü', 'alt' => 'menü']); ?>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

    <ul class="fofunkcio">
      <li>

        <?php echo $this->Html->link(
          'Users',
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
          'Tools',
          '/tools/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>

      <ul>
        <li>

          <?php echo $this->Html->link(
            ' Close to expire',
            '/tools/closetoexpire',
            ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
          ); ?>

        </li>
      </ul>
      <li>
        <?php echo $this->Html->link(
          'Publishers',
          '/publishers/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>
      <ul>
        <li>
          <?php echo $this->Html->link(
            ' Add publisher',
            '/publishers/index',
            ['class' => 'btn bg-transparent sidemenu addnewpub', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newpublisher', "id" => "addnewpub"]
          ); ?>
        </li>
      </ul>
      <li>
        <?php echo $this->Html->link(
          'Boardgames',
          '/boardgames/index',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
        ); ?>

      </li>
      <ul>
        <li>
          <?php echo $this->Html->link(
            'Tools list',
            '/tools/index',
            ['class' => 'btn bg-transparent sidemenu', "role" => "button"]
          ); ?>

        </li>
        <li>
          <?php echo $this->Html->link(
            'Add boardgames',
            '/boardgames/index',
            ['class' => 'btn bg-transparent sidemenu addnewbg', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newboardgame', "id" => "addnewbg"]
          ); ?>

        </li>
      </ul>
      <hr>
      <li>
        <?php echo $this->Html->link(
          'Logout',
          '/users/logout',
          ['class' => 'btn bg-transparent sidemenu', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newboardgame']
        ); ?>

      </li>
    </ul>

  </ul>
</div>