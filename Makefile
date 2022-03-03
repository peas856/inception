

all:
	docker-compose -f srcs/docker-compose.yml up --build -d

clean:
	docker-compose -f srcs/docker-compose.yml down 

fclean: clean
	docker volume rm inception_database inception_wp
	docker system prune -a