{{ content() }}

<div class="page-header">
	 <h2>Add new phone</h2>
</div>

{{ form("phoneAdd/add") }}
	<table class="table table-bordered">
		<tr>
			<th>Phone model</th>
			<th>Producer</th>
			<th>OS</th>
			<th></th>
		</tr>
		<tr>
			<td><input type="text" name="model" placeholder="model..." required></td>
			<td>
				<select name="producer" required>
				  {% for producer in producers %}
				  	<option value="{{producer.name}}">{{producer.name}}</option>
				  {% endfor %}
				</select>
			</td>
			<td>
				<select name="OS" required>
				  {% for system in OS %}
				  	<option value="{{system.name}}">{{system.name}}</option>
				  {% endfor %}
				</select>
			</td>
			<td>{{ submit_button("Add", "class": "btn btn-success") }}</td>
		</tr>
	</table>
</form>