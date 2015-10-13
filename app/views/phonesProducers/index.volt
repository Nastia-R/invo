{{ content() }}

<div class="page-header">
	 <h2>Add new producer</h2>
</div>

{{ form("phonesProducers/add") }}
	<input type="text" name="name" placeholder="Producer name..." required>
	{{ submit_button("Add", "class": "btn btn-success") }}
</form>