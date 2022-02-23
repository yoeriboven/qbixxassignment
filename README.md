## Qbixx Test Project

Hey there! Welcome to the Qbixx test project.

You can find your test assignment [here](docs/TestAssigment.md).


## Setting things up

But first, let's set up the project! This is a real simple Laravel app, so setting it up should be pretty straightforward.  We assume you have all the prerequisites for a new Laravel application. If you don't you can look at official Laravel docs.

### Databases

Note: scroll down to find the SQL to execute and set this up automatically.

First, you'll need to set up your **main database**:
- Name: `qbixxassignment`
- Encoding: `utf8mb4`
- Collation: `utf8mb4_unicode_520_ci`

Accessible with a user:
- Username: `qbixxassignment`
- Password: `qbixxassignment`

And a **test database**:
- Name: `qbixxassignment_test`
- Encoding: `utf8mb4`
- Collation: `utf8mb4_unicode_520_ci`

Accessible with a user:
- Username: `qbixxassignment_test`
- Password: `qbixxassignment_test`

Note: make sure the test user also has enough rights to create and drop databases if you run tests in parallel.

The following SQL statement can be executed as `root` user to set this up for you:
```sql
CREATE USER 'qbixxassignment'@'%' IDENTIFIED BY 'qbixxassignment';

GRANT INDEX, INSERT, TRIGGER, DROP, EVENT, CREATE, ALTER, SHOW VIEW, ALTER ROUTINE, DELETE, REFERENCES, SELECT, GRANT OPTION, UPDATE, CREATE VIEW, EXECUTE, CREATE TEMPORARY TABLES, CREATE ROUTINE, LOCK TABLES ON `qbixxassignment`.* TO 'qbixxassignment'@'%';

CREATE USER 'qbixxassignment_test'@'%' IDENTIFIED BY 'qbixxassignment_test';

GRANT SELECT, INSERT, UPDATE, DELETE, REFERENCES, CREATE, DROP, ALTER, INDEX, TRIGGER, REPLICATION CLIENT, REPLICATION SLAVE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EXECUTE, RELOAD, SHUTDOWN, FILE, PROCESS, SUPER, CREATE TEMPORARY TABLES, LOCK TABLES, SHOW DATABASES, CREATE USER, GRANT OPTION, EVENT, CREATE TABLESPACE ON *.* TO 'qbixxassignment_test'@'%';

GRANT INDEX, INSERT, TRIGGER, DROP, EVENT, CREATE, ALTER, SHOW VIEW, ALTER ROUTINE, DELETE, REFERENCES, SELECT, GRANT OPTION, UPDATE, CREATE VIEW, EXECUTE, CREATE TEMPORARY TABLES, CREATE ROUTINE, LOCK TABLES ON `qbixxassignment_test`.* TO 'qbixxassignment_test'@'%';

FLUSH PRIVILEGES;
```

### Project

After that, run one of the following commands depending if you use Valet or Sail:

```bash
composer run-script valet
```

or

```bash
composer run-script sail
```

Either will:
- Install Composer packages
- Install npm packages
- Set up the .env file
- Generate the app key
- Run the migrations
- Seed the database
- Build front-end assets
- Provide code autocompletion

That's it, the project should be ready. It's up to you how're you going to run it. Laravel test server, Valet, Laravel sail, etc, everything is okay, as long as the project works and code is well structured :).
