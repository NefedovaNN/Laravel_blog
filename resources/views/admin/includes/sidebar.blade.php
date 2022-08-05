<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class=" nav-item">
          
                  <a href="{{route('admin.main.index')}}" class="nav-link">
          
                    <i class="fas fa-home nav-icon"></i>
                    <p>
                      Главная
                    </p>
                  </a>
                </li>

                 <li class=" nav-item">
          
                  <a href="{{route('admin.user.index')}}" class="nav-link">
          
                    <i class="fas fa-users nav-icon"></i>
                    <p>
                      Пользователи
                    </p>
                  </a>
                </li>
          
                 <li class=" nav-item">
          
                  <a href="{{route('admin.post.index')}}" class="nav-link">
          
                    <i class="far fa-regular fa-clipboard nav-icon"></i>
                    <p>
                      Посты
                    </p>
                  </a>
                </li>

            <li class=" nav-item">
          
              <a href="{{route('admin.category.index')}}" class="nav-link">
      
                <i class=" fas fa-solid fa-list nav-icon"></i>
                <p>
                  Категории
                </p>
              </a>
            </li>

            <li class=" nav-item">
          
              <a href="{{route('admin.tag.index')}}" class="nav-link">
      
                <i class=" fas fa-tag nav-icon"></i>
                <p>
                  Тэги
                </p>
              </a>
            </li>
           
          </ul>
   
    </div>
    <!-- /.sidebar -->
  </aside>