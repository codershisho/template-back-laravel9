db:
	docker-compose build
db-no:
	docker-compose build --no-cache
du:
	docker-compose up -d
due:
	docker-compose up -d
	docker-compose exec -u root php sh
de:
	docker-compose exec -u root php sh
dd:
	docker-compose down