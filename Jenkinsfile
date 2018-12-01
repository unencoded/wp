pipeline {
  agent any
  stages {
    stage('Git clone') {
      steps {
        git(url: 'https://github.com/unencoded/wp', branch: 'master')
      }
    }
    stage('Say Hello') {
      steps {
        echo 'hello!'
      }
    }
  }
}