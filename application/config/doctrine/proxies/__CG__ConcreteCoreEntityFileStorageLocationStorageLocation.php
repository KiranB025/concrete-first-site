<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\File\StorageLocation;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class StorageLocation extends \Concrete\Core\Entity\File\StorageLocation\StorageLocation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'fslName', 'fslConfiguration', 'fslID', 'files', 'fslIsDefault'];
        }

        return ['__isInitialized__', 'fslName', 'fslConfiguration', 'fslID', 'files', 'fslIsDefault'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (StorageLocation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', []);

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayName($format = 'html')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayName', [$format]);

        return parent::getDisplayName($format);
    }

    /**
     * {@inheritDoc}
     */
    public function setName($fslName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$fslName]);

        return parent::setName($fslName);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($fslIsDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', [$fslIsDefault]);

        return parent::setIsDefault($fslIsDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigurationObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigurationObject', []);

        return parent::getConfigurationObject();
    }

    /**
     * {@inheritDoc}
     */
    public function isDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDefault', []);

        return parent::isDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfigurationObject($configuration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfigurationObject', [$configuration]);

        return parent::setConfigurationObject($configuration);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeObject', []);

        return parent::getTypeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileSystemObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileSystemObject', []);

        return parent::getFileSystemObject();
    }

    /**
     * {@inheritDoc}
     */
    public function clearCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearCache', []);

        return parent::clearCache();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', []);

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', []);

        return parent::save();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasFiles', []);

        return parent::hasFiles();
    }

}
