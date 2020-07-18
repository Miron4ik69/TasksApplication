<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить задачу</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTask">
          <div class="md-form form-lg">
            <input type="text" id="inputName" name="name" class="form-control form-control-lg" required>
            <label for="inputName">Имя</label>
          </div>
          <div class="md-form form-lg">
            <input type="email" name="email" id="inputEmail" class="form-control form-control-lg" required>
            <label for="inputEmail">email</label>
          </div>
          <div class="form-group green-border-focus">
            <label for="exampleFormControlTextarea5">Опишите задачу</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea5" rows="3" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Отправить</button>
           </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Body-->
        <div class="modal-body text-center mb-1">

          <h5 class="mt-1 mb-2">Авторизация</h5>
      <form action="/login" method="post">
          <div class="md-form ml-0 mr-0">
            <input type="password" name="login" id="form1" class="form-control ml-0" required>
            <label for="form1" class="ml-0">login</label>
          </div>

          <div class="md-form ml-0 mr-0">
            <input type="password" name="password" id="form1" class="form-control ml-0" required>
            <label for="form1" class="ml-0">password</label>
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-cyan waves-effect waves-light">Войти</button>
          </div>
        </div>
      </form>
      </div>
      <!--/.Content-->
    </div>
</div>

