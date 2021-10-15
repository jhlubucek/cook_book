# docker symfony template

This is a template for docker run symphony app 
- Based on tutorial from [Peter Fisher](https://youtu.be/BJh6Kht8E-s)

## Configuration
docker-compose -> ports etc

## Installation


projec can be run with docker-compose with simple command
```bash
docker-compose up -d --build
```

then go to the container
```bash
docker exec -it [docker id/name] bash
```

then create symfony skeleton
```bash
cd.. && composer create-project symfony/website-skeleton app
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)
