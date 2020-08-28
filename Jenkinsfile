pipeline {
        environment {
            registry = "gits5622/yii-basic"
            registryCredential = 'docker-hub'
            dockerImage = ''
            // dockermigrate = docker.build("app -f Dockerfile-migrate")
            }
        agent any
        stages {
                stage('Cloning our Git') {
                    steps {
                    git 'https://github.com/gitx5622/yii-basic.git'
                    }
                }
                stage('Building our image') {
                    steps{
                        script {
                        dockerImage = docker.build registry
                        }
                    }
                    post{
                        always{
                            echo "Running"
                        }
                        success{
                            // script {
                             //       dockermigrate
                           //  }
                           echo "Build Success"
                        }
                        failure{
                            echo "Failed"
                        }
                    }
                }
                
                stage('Deploy our image') {
                    steps{
                        script {
                        docker.withRegistry( '', registryCredential ) {
                        dockerImage.push()
                            }
                        }
                    }
                }

                 stage('Running composer install') {
                            steps {
                               sh 'sudo apt-get install php7.2-curl'
                               sh 'sudo apt-get install php-mbstring php7.2-mbstring'
                               sh 'sudo apt install php-xml'
                               sh 'composer install'
                            }
                        }

                stage ('Running tha Application'){
                    steps{
                       sh "docker-compose up -d"
                    }
                }

    }
}