Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu-precise12042-x64-vbox43"
  config.vm.box_url = "https://puphpet.s3.amazonaws.com/ubuntu-precise12042-x64-vbox43.box"

  config.vm.network :private_network, ip: "192.168.56.101"
    config.ssh.forward_agent = true

  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 1024]
    v.customize ["modifyvm", :id, "--name", "memphis-php-dev"]
  end

  
  config.vm.synced_folder "./", "/var/sites/dev.sandbox", id: "vagrant-root" 
  config.vm.provision :shell, :inline => "sudo apt-get update"


  config.vm.provision :shell, :inline => 'echo -e "mysql_root_password=memphisphp
controluser_password=awesome" > /etc/phpmyadmin.facts;'

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "manifests"
    puppet.module_path = "modules"
    puppet.options = ['--verbose']
  end
end
