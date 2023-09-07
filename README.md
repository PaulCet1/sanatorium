## Development

1. Install [Docksal](https://docksal.io/).
2. Run `fin init` command.
3. Open [sanatorium.docksal](http://sanatorium.docksal/).

### Beware of init command

> Command `fin init` is creating all Docker stuff for project. First it deletes all Docker containers, networks and volumes (including project database). Then it creates them again. And finally it runs `fin prepare-site` command, which contains site specific initial definitions. So once You run this command please do not run it again, unless You want to recreate all project components again.
>
> If You want to start previously initialized project, please use `fin start` command.



## How to?

* `fin start` – start previously initialized Docker project
* `fin stop` – stop Docker containers
* `fin project remove` – completely remove Docker stuff related to this project
* `fin logs --follow` – read server logs .
* `fin db/restore` – initialize/reset database.
* `fin db/backup` – creates gziped database dump.

> You can enable Xdebug » [read the docs](https://docs.docksal.io/tools/xdebug/)







