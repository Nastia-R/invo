
{{ content() }}

<div class="page-header">
	 <h2>Todo list</h2>
</div>

{# add-task form #}
	
{{ form("todo/add") }}
	<input type="text" name="title" placeholder="title...">
	<input type="text" name="description" placeholder="description...">
	{{ submit_button("Add", "class": "btn btn-success") }}
</form>

{# end add-task form #}

{# tasks list #}

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	{% for task in tasks %}
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="{{ task.id }}">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ task.id }}" aria-expanded="true" aria-controls="collapse{{ task.id }}">
		          {{ task.title }}
		          	{% if(task.conditions == 1) %}
		          		<a class="restore btn btn-warning btn-xs" href="{{ url("todo/restore/"~task.id) }}" >Restore</a>
						<a class="remove btn btn-danger btn-xs" href="{{ url("todo/remove/"~task.id) }}" >Remove</a>
					{% elseif(task.conditions == 0) %}
						<a class="done btn btn-success btn-xs" href="{{ url("todo/done/"~task.id) }}" >Done</a>
					{% endif %}
		        </a>
		      </h4>
		    </div>
			<div id="collapse{{ task.id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{ task.title }}">
		      <div class="panel-body">
		      	{{ task.description }}
		      </div>
	    	</div>
		</div>
	{% endfor %}
</div>

{# end tasks list #}