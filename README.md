# IT Asset & Service Management Portal
Professional PHP + MySQL application using AWS RDS MySQL.

Architecture: Browser → EC2 → Docker PHP/Apache → AWS RDS MySQL

Features:
- Professional dashboard
- Employee CRUD
- IT asset CRUD
- Service ticket CRUD
- Docker ready
- GitHub/Jenkins/Docker Hub ready

Run on EC2:
cp .env.example .env
# edit .env with RDS endpoint/password
docker compose up -d --build
