<div class="col-lg-2 d-none d-lg-block" id="thirddiv">
  <header class="col-12">
    <h4>Menu</h4>
    <span class="f-right">
      <?= $this->Html->image('arrow_left.png', ['title' => 'összecsuk', 'alt' => 'összecsuk', 'id' => 'panel-zaro']);  ?>

    </span>
  </header>

  <div class="col-12 m-b-20">
    <br>
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
          'Production report',
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
            '/tools/closeToExpire',
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
            ['class' => 'btn bg-transparent sidemenu addnewpub', "role" => "button", 'data-bs-toggle' => 'modal', 'data-bs-target' => '#newpublisher', "class" => "addnewpub"]
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
            'Gameparts',
            '/gameparts/index',
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
          ['class' => 'btn bg-transparent sidemenu',  "role" => "button"]
        ); ?>

      </li>
    </ul>
  </div>
</div>