<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder05aff = null;
    private $initializerc7b0e = null;
    private static $publicProperties1dfaf = [
        
    ];
    public function getConnection()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getConnection', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getMetadataFactory', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getExpressionBuilder', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'beginTransaction', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getCache', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'transactional', array('func' => $func), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'commit', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->commit();
    }
    public function rollback()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'rollback', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'createQuery', array('dql' => $dql), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'createQueryBuilder', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'flush', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'clear', array('entityName' => $entityName), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->clear($entityName);
    }
    public function close()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'close', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->close();
    }
    public function persist($entity)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'persist', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'remove', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'refresh', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'detach', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'merge', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'contains', array('entity' => $entity), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getEventManager', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getConfiguration', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'isOpen', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getUnitOfWork', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getProxyFactory', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'getFilters', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'isFiltersStateClean', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'hasFilters', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return $this->valueHolder05aff->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc7b0e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder05aff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder05aff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder05aff->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, '__get', ['name' => $name], $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        if (isset(self::$publicProperties1dfaf[$name])) {
            return $this->valueHolder05aff->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05aff;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder05aff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05aff;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder05aff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, '__isset', array('name' => $name), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05aff;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder05aff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, '__unset', array('name' => $name), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05aff;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder05aff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, '__clone', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        $this->valueHolder05aff = clone $this->valueHolder05aff;
    }
    public function __sleep()
    {
        $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, '__sleep', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
        return array('valueHolder05aff');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7b0e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7b0e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc7b0e && ($this->initializerc7b0e->__invoke($valueHolder05aff, $this, 'initializeProxy', array(), $this->initializerc7b0e) || 1) && $this->valueHolder05aff = $valueHolder05aff;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder05aff;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder05aff;
    }
}
