<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Kategori</h2>


		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
		@foreach(App\Category::noParent()->get() as $category)

			@if($category->hasChild())
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#{{ strtolower($category->title) }}">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>
							{{ $category->title }}
						</a>
					</h4>
				</div>
				<div id="{{ strtolower($category->title) }}" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
						@foreach($category->childs as $catchilds)

							<li><a href="{{ url('/catalogs?cat=' . $catchilds->id)}}">{{ $catchilds->title }} </a></li>
							

						@endforeach
						</ul>
					</div>
				</div>
			</div>						

			@else

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="{{ url('/catalogs?cat=' . $category->id)}}">{{ $category->title }}</a></h4>
				</div>
			</div>

			@endif

			@endforeach


		</div><!--/category-products-->

	</div>
</div>