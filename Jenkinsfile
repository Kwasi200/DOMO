pipeline {
    agent any

    stages {
        stage('Build and Test') {
            steps {
                sh 'docker-compose build'
                sh 'docker-compose up -d'
                sh 'docker-compose exec app php -f app/index.php car_name=civic'
            }
        }
    }

    post {
        always {
            sh 'docker-compose down'
        }
    }
}
