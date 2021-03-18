pipeline {
    agent any
   
    stages {
                
        stage('Stage Deploy With Ansible on Development Environment') {
            steps {
                ansiblePlaybook credentialsId: 'abc1df23-b934-48dd-93b9-7f5894abc5a3', disableHostKeyChecking: true, installation: 'ansible2', inventory: 'hosts.inv', playbook: 'playbook1.yml'
                
            }
        }
        
    }

}

