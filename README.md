
# Adminpanel to manage companies
 - Use Repository Pattern.
 - Basic Laravel Auth: ability to log in as administrator.
 - Use database seeds to create first user with email admin@admin.com and password "password".
 - CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
 - Companies DB table consists of these fields: Name (required), email, logo (minimum 100x100), website
 - Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone
 - Use database migrations to create those schemas above
 - Store companies logos in storage/app/public folder and make them accessible from public.
 - Use basic Laravel resource controllers with default methods - index, create, store etc.
 - Use Laravel's validation function, using Request classes.
 - Use Laravel's pagination for showing Companies/Employees list, 10 entries per page.
 - Use Laravel's starter kit for auth and basic theme, but remove ability to register.
 - Email notification: send email whenever a employee is assign to a company(use Mailtrap).
 - Make the project multi-language (using lang folder) (Bangla & English).
 - No need to add any extra design. Only Laravel Breeze design.
 - Follow Single Responsibility Principle.
 - Follow DRY (Don't Repeat Yourself) principle.

- Update
  - Use Request Class
  - Redirect to login from register
  - Route Model Binding
  - Create & Update Form need to refactor(DRY)
  - Accessor & Mutator




<br/>
<br/>