

all:
	sudo mkdir /home/trhee/data/wordpress
	sudo mkdir /home/trhee/data/mariadb
	sudo docker-compose -f srcs/docker-compose.yml up --build -d


clean:
	sudo docker-compose -f srcs/docker-compose.yml down 
	docker volume rm inception_database inception_wp
	sudo rm -rf /home/trhee/data/*


fclean: clean
	docker system prune -a