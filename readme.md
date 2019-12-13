# Laravel GraphQL Example

## Install and Run

`docker-composer -up`

## GraphQL Endpoint

`/graphql`

## GraphQL Playground Endpoint

`/graphql-playground`

## Sample Models

* Department: `/departments`
* Employees: `/employees`
* Roles: `/roles`

## Fun Stuff

* It uses a package I created to automatically generate routes, controllers, and
views for models (`webbtj/crud`).
* Uses `nuwave/lighthouse` for GraphQL implementation.
* Seeds data from a migration so the DB will keep a record of the action and not
perform it multiple times (and will perform in on `docker-compose up` without
additional docker config).
