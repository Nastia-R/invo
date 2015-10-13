{{ content() }}

<div class="page-header">
	 <h2>Add new OS</h2>
</div>

{{ form("operatingSystems/add") }}
	<input type="text" name="name" placeholder="OS name..." required>
	{{ submit_button("Add", "class": "btn btn-success") }}
</form>