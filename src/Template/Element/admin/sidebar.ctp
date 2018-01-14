<div class="site-sidebar">
	<div class="custom-scroll custom-scroll-light">
		<ul class="sidebar-menu">
			<li class="menu-title">Main</li>
			<li >
				<a href="/admin/" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-anchor"></i></span>
					<span class="s-text">Dashboard</span>
				</a>
			</li>
			<li class="with-sub">
				<a  class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-palette"></i></span>
					<span class="s-text">Media</span>
				</a>
				<ul>
					<li><a href="/admin/images">Library</a></li>
					<li><a href="/admin/images/add">Add new</a></li>
				</ul>
			</li>
			<li  class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-layout-tab"></i></span>
					<span class="s-text">Home page</span>
				</a>
				<ul>
					<li><a href="#">Header Banner</a></li>
					<li><a href="#">Footer Banner</a></li>
					<li><a href="#">New product</a></li>
					<li><a href="#">Special product</a></li>
				</ul>
			</li>
			<li class="menu-title">Manager</li>
			<li class="with-sub">
				<a class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="tag tag-danger">10</span>
					<span class="s-icon"><i class="ti-package"></i></span>
					<span class="s-text">Products</span>
				</a>
				<ul>
					<li><?= $this->Html->link('All products',['controller' => 'Products', 'action' => 'index']); ?> </li>
					<li><?= $this->Html->link('Add new',['controller' => 'Products', 'action' => 'add']); ?></li>
				
					<li><?= $this->Html->link('Product Unit',['controller' => 'ProductUnits', 'action' => 'index']); ?></li>
					<li><a href="#">Tags</a></li>
				</ul>
			</li>

			<li class="with-sub">
				<a class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="fa fa-folder-open-o"></i></span>
					<span class="s-text">Categories</span>
				</a>
				<ul>

					<li><?= $this->Html->link('All Categories',['controller' => 'ProductCategories', 'action' => 'index']); ?></li>
					<li><?= $this->Html->link('Add new',['controller' => 'ProductCategories', 'action' => 'add']); ?></li>
				</ul>
			</li>
				<li>
				<a href="/admin/orders" class="waves-effect  waves-light">
					<span class="s-icon"><i class="fa fa-money"></i></span>
					<span class="s-text">Orders</span>
				</a>
			</li>
			<li class="with-sub">
				<a class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="fa fa-group"></i></span>
					<span class="s-text">Customers</span>
				</a>
				<ul>
					<li><?= $this->Html->link('All customers','/admin/customers',['class' => '', 'escape'=>false]); ?></li>
					<li><?= $this->Html->link('Add new','/admin/customers/add',['class' => '', 'escape'=>false]); ?></li>
				</ul>
			</li>
			<li class="with-sub">
				<a class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="fa fa-user-secret"></i></span>
					<span class="s-text">Users</span>
				</a>
				<ul>
					<li><a href="#">All user</a></li>
					<li><a href="#">Add new</a></li>
				</ul>
			</li>
			<li class="menu-title">More</li>
			<li>
				<a href="#" class="waves-effect  waves-light">
					<span class="s-icon"><i class="fa fa-info"></i></span>
					<span class="s-text">Informations</span>
				</a>
			</li>
			<li>
				<a href="#" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-settings"></i></span>
					<span class="s-text">Setting</span>
				</a>
			</li>
			
		</ul>
	</div>
</div>