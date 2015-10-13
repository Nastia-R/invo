<p>
    <h2>Phones</h2>
</p>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Model</td>
            <td>Producer</td>
            <td>OS</td>
            <td>Status</td>
            <td>Reserve</td>
        </tr>
    </thead>
    <tbody>
        {% for phone in phones %}
            <tr>
                <td>
                    {{ phone.id }}
                </td>
                <td>
                    {{ phone.model }}
                </td>
                <td>
                    {{ phone.phonesProducers.name }}
                </td>
                <td>
                    {{ phone.operatingSystems.name }}
                </td>
                
                {% if(phone.status == 'Available') %}
                    <td>
                        <span class="label label-success">{{phone.status}}</span>
                    </td>
                    <td>
                        <a href="{{ url("phones/reserve/"~phone.id) }}" class="btn btn-success btn-xs">Reserve</a>
                    </td>
                {% elseif(phone.users.id == user_id) %}
                    <td>
                        <span class="label label-success">Your reservation</span>
                    </td>
                    <td>
                        <span class="label label-success">{{ phone.users.username }}</span>
                        <a href="{{ url("phones/cancelReservation/"~phone.id) }}" class="btn btn-danger btn-xs">Cancel</a>
                    </td>
                {% else %}
                    <td>
                        <span class="label label-warning">{{phone.status}}</span>
                    </td>
                    <td>
                        <a href="{{ url("phones/getUserName/"~phone.users.id) }}" class="btn btn-xs disabled">{{ phone.users.username }}</a>
                    </td>
                {% endif %}
            </tr>
        {% endfor %}
    </tbody>
</table>
