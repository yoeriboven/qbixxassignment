## Qbixx Test Project

Hey there! Welcome to the Qbixx test project.

You can find your test assignment [here](docs/test-assignment.md).

## Setting things up

But first, let's set up the project! This is a real simple Laravel app, so setting it up should be pretty straightforward.  We assume you have all the prerequisites for a new Laravel application. If you don't you can look at official Laravel docs.

## Databases

If you're using Valet or laravel test server, you'll need to set up local databases. You can find the instruction [here](docs/setting-up-db.md)

Note: Laravel sail will automatically set up the db.

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
