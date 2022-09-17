
<?require 'header.php' ?>

        <h1>Главная</h1>
      </div>
</div>
</div>
<div id="real">
  <div class="row">
<div class="col-lg-4">
          <?require 'chart.php' ?>
          <div class="regsterUsers">
            <div class="card">
              <div class="card-top">
                <h1><?require 'new_clients.php' ?></h1>
                <i class="fa fa-users"></i>
              </div>
              <div class="card-bottom">
                <p>Количество новых клиентов в этом месяце</p>
              </div>
            </div>
          </div>
          <div class="regsterUsers">
            <div class="card">
              <div class="card-top">
                <h1><?require 'new_orders.php' ?></h1>
                <i class="fa fa-users"></i>
              </div>
              <div class="card-bottom">
                <p>Количество заказов в этом месяце</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div id="money">
            <div class="card">
              <div id="chart" style="width:100%; height:310px;"></div>
            </div>
          </div>
        </div>
    <div class="col-lg-3">
        <div class="analytics">
          <div class="card">
            <div class="icon"><i class="fab fa-vimeo-v "></i></div>
            <div class="text">
              <h1><?require 'orders_num.php' ?></h1>
              <p>Количество заказов</p>
            </div>
          </div>
        </div>
      </div>
    <div class="col-lg-3">
        <div class="analytics">
          <div class="card">
            <div class="icon"><i class="fa fa-users "></i></div>
            <div class="text">
              <h1><?require 'clients_num.php' ?></h1>
              <p>Количество клиентов</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="analytics">
          <div class="card">
            <div class="icon"><i class="fa fa-envelope"></i></div>
            <div class="text">
              <h1><?require 'requests_num.php' ?></h1>
              <p>Количество обращений</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="analytics">
          <div class="card">
            <div class="icon"><i class="fa fa-video"></i></div>
            <div class="text">
              <h1><?require 'nomencl_num.php' ?></h1>
              <p>Позиций номенклатуры</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>


<?require 'footer.php' ?>