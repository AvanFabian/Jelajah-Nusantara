document.addEventListener('DOMContentLoaded', function() {
    var usersTable = document.querySelector('#usersTable tbody');

    fetch('/admin/getUsers')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            // Iterate over the users and append rows to the table
            data.forEach(function(users) {
                var row = document.createElement('tr');
                row.innerHTML = `
                    <td>${users.id}</td>
                    <td>${users.username}</td>
                    <td>${users.role}</td>
                    <td>${users.email}</td>
                `;
                // If user role is superadmin disable the promote button, else enable it
                if (users.role === 'superadmin') {
                    row.innerHTML += `
                        <td> 
                        <button type="button" class="btn btn-outline-secondary" disabled>
                            <i class="fas fa-user-shield"></i>
                        </button>
                        </td>
                    `;
                } else {
                    row.innerHTML += `
                        <td>
                            <form action="/admin/manageUsers" method="POST">
                                <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').getAttribute('content')}">
                                <input type="hidden" name="userId" value="${users.id}">
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-user-shield"></i>
                                </button>
                            </form>
                        </td>
                    `;
                }
                usersTable.appendChild(row);
            });
        })
        .catch(function(error) {
            console.log(error);
        });
});




